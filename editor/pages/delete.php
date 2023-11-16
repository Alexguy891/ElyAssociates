<script>
if (confirm("message")) == true {
    console.log("hit true"); 
} else {
    console.log("hit false");
}
</script>


<?php require 'support/config.php'; ?>
<?php
if (isset($_POST['delete_button'])) {
    if (!empty($_POST['image'])) {
        $images_to_remove = $_POST['image'];

        foreach($images_to_remove as $image) {
            $sql = "SELECT file_path FROM photo WHERE photo_id = $image";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $path_for_unlink = $result[0]['file_path'];

            $exploded_path = explode("/", $path_for_unlink);
            $path_for_website_unlink = realpath("../../")."/website/media/images/".end($exploded_path);
            $path_for_editor_unlink = realpath("../../") . "/editor/media/images/".end($exploded_path);
            
            $deleted_from_website = false;
            $deleted_from_editor = false;

            if (unlink($path_for_website_unlink)) {
                echo "success";
                $deleted_from_website = true; 
            }
            else {
                echo "Failed deleting from website folder";
            }

            if (unlink($path_for_editor_unlink)) {
                echo "success";
                $deleted_from_editor = true; 
            }
            else {
                echo "Failed deleting from editor folder";
            }

            if ($deleted_from_editor && $deleted_from_website) {

                $sql = "DELETE FROM photo WHERE photo_id = $image";
                $stmt = $GLOBALS['pdo']->prepare($sql);
                $stmt->execute();

                header("Location: edit_carousel_photos.php?deletesuccess");
                } 
            
                else {
                    echo "
                    <script type = 'text/javascript'>
                     alert('Failed deleting image from server');
                    window.location.assign('edit_carousel_photos.php');
                    </script>";
                }
        }
    } else {
        header("Location: edit_carousel_photos.php?deletecancelled");
    }
}

?>