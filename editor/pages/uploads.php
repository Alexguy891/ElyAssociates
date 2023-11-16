
<?php require 'support/config.php'; 

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_error = $_FILES['file']['error'];
    $file_type = $_FILES['file']['type'];

    $file_ext = explode('.', $file_name);

    $file_actual_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($file_actual_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size < 5000000) {
                $sql = "SELECT COUNT(*) FROM photo";
                $stmt = $GLOBALS['pdo']->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                $photo_id = $result[0][0] + 1;

                $found_in_web = false;
                $found_in_editor = false;
            
                $file_name_new = "carousel".$photo_id.".".$file_actual_ext;
                $file_destination = realpath("../../") . "/website/media/images/" . $file_name_new;
                if (move_uploaded_file($file_tmp_name, $file_destination)) {
                    echo "success";
                    $found_in_web = true;
                } 
                
                else {
                    echo "Failed adding to website folder";
                }

                $editors_copy_path = realpath("../"). "/media/images/" . $file_name_new;
                
                if (copy($file_destination, $editors_copy_path)) {
                    echo "success";
                    $found_in_editor = true;
                } 
                
                else {
                    echo "Failed adding to editor folder";
                }

                if ($found_in_web && $found_in_editor) {

                    $file_path_sql = "../media/images/".$file_name_new;
                    $file_name_sql = "carousel".$photo_id;
                
                    $sql = "INSERT INTO photo (photo_id, photo_name, file_path, page_id, photo_date) VALUES ('$photo_id', '$file_name_sql', '$file_path_sql', 'index', 'today')";
                    $stmt = $GLOBALS['pdo']->prepare($sql);
                    $stmt->execute();

                    header("Location: edit_carousel_photos.php?uploadsuccess");
                } 
                else {
                    echo "
                        <script type = 'text/javascript'>
                        console.log('hit js');
                        alert('Failed uploading image from server');
                        window.location.assign('edit_carousel_photos.php');
                        </script>";
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
else {
    header("Location: edit_carousel_photos.php?uploadcancelled");
}
?>

