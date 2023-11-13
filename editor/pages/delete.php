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
    // Get selected images
    if (!empty($_POST['image'])) {
        $images_to_remove = $_POST['image'];

        foreach($images_to_remove as $image) {
            // Get each images path for unlinking (deletion)
            $sql = "SELECT file_path FROM photo WHERE photo_id = $image";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $path_for_unlink = $result[0]['file_path'];

            // Rebuild path for unlink() must be deleted in two folders
            $exploded_path = explode("/", $path_for_unlink);
            $path_for_website_unlink = realpath("../../")."/website/media/images/".end($exploded_path);
            $path_for_editor_unlink = realpath("../../") . "/editor/media/images/".end($exploded_path);
            
            // Delete files
            unlink($path_for_website_unlink);
            unlink($path_for_editor_unlink);

            // Delete from DB
            $sql = "DELETE FROM photo WHERE photo_id = $image";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->execute();

            // Refresh Page with success messages
            header("Location: edit_carousel_photos.php?deletesuccess");
        }
    } else {
        // Refresh Page with error messages
        header("Location: edit_carousel_photos.php?deletecancelled");
    }
}

?>