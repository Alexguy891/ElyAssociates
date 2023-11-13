<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>Carousel Photo Editor</title>
</head>

<style>
    .editable-image {
        position: relative;
        display: block;
        height: 100%;
    }
    .checkbox {
        position: absolute;
        top: 0;
        right: 0;
    }
    .p1 {
        font-size: 32px;
    }

</style>

<script>
    function confirmMessage(form) {
        if (confirm("Are you sure you want to delete selected photo(s)?")) {
            form.submit();
        } else {
            alert("Nothing Deleted!");
            form.reset();
        }
    }

    function confirmUpload(form) {
        if (confirm("Upload selected file?")) {
            form.submit();
        } else {
            alert("Nothing Uploaded!");
            form.reset();
        }
    }

</script>


<body>
    <?php require 'support/header.php'; ?>
    <p1> To upload a photo, choose your file and then hit submit. <br>
    If you want to delete a photo, select its' box and then click delete. </p1>
    <br>



    <form action = "uploads.php" method = "POST" enctype = "multipart/form-data">
        <input type = "file" name = "file">
        <button type = "submit" name = "submit" onclick = "confirmUpload(this.form)">Submit</button>
    </form>

    <br>
    <br>

    <form action = "delete.php" method = "POST" enctype = "multipart/form-data">
        <button type = "submit" name = "delete_button" onclick = "confirmMessage(this.form)">Delete</button>
    <?php
        $images = getCarouselPhotos();

        foreach($images as $index => $image) {
            echo "<div class = 'editable-image'>";
            echo "<img src = '".$image['file_path']."' class = 'd-block w-100'>";
            echo "<div class = checkbox>";
            echo "<input type = 'checkbox' name = 'image[]' value = '".$image['photo_id']."'>";
            echo "</div>";
            echo "</div>";
        }

        ?>
        </form>

    

</body>

