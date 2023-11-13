
<?php require 'support/config.php'; 

if (isset($_POST['submit'])) {
    // Read in file
    $file = $_FILES['file'];

    if (!isset($file[0])) {
        echo "No file selected!";
        header("Location: edit_carousel_photos.php?uploadcancelled");
    }

    // Get file properties
    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_error = $_FILES['file']['error'];
    $file_type = $_FILES['file']['type'];

    $file_ext = explode('.', $file_name);

    // Enable JPG/jpg PNG/png JPEG/jpeg
    $file_actual_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'png');

    // Check that file is allowed
    if (in_array($file_actual_ext, $allowed)) {
        // Error Property
        if ($file_error === 0) {
            // Size property
            if ($file_size < 5000000) {
                // Get number of rows from table. Cannot be specific for carousel photos, as they are not stored in a separate table.
                $sql = "SELECT COUNT(*) FROM photo";
                $stmt = $GLOBALS['pdo']->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                // New photo id
                $photo_id = $result[0][0] + 1;

                $found_in_web = false;
                $found_in_editor = false;
            
                $file_name_new = "carousel".$photo_id.".".$file_actual_ext;
                $file_destination = realpath("../../") . "/website/media/images/" . $file_name_new;
                if (move_uploaded_file($file_tmp_name, $file_destination)) {
                    echo "success";
                    $found_in_web = true; // flag for web side
                } 
                
                else {
                    echo "Failed adding to website folder";
                }

                // Copy file to editor folder so it is visible
                $editors_copy_path = realpath("../"). "/media/images/" . $file_name_new;
                
                if (copy($file_destination, $editors_copy_path)) {
                    echo "success";
                    $found_in_editor = true; // flag for editor side
                } 
                
                else {
                    echo "Failed adding to editor folder";
                }

                // Check for our copies
                if ($found_in_web && $found_in_editor) {

                    $file_path_sql = "../media/images/".$file_name_new;
                    $file_name_sql = "carousel".$photo_id;
                
                    // Update DB for getCarouselPhotos() to work
                    $sql = "INSERT INTO photo (photo_id, photo_name, file_path, page_id, photo_date) VALUES ('$photo_id', '$file_name_sql', '$file_path_sql', 'index', 'today')";
                    $stmt = $GLOBALS['pdo']->prepare($sql);
                    $stmt->execute();

                    // Success message
                    header("Location: edit_carousel_photos.php?uploadsuccess");
                } 
                
                else {
                    echo "Failed to add to database";
                }
            } 
            else {
                echo "Your file is too large! 5mb max!";
            }
        } 
        else {
            echo "There was an error uploading your file!";
        }
    } 
    else {
        echo "You cannot upload files of this type, supported types are .jpg, .jpeg, and .png!";
    }
} 
?>

