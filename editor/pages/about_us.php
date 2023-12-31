<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>About Us</title>
</head>
<body>
    <?php require 'support/header.php'; ?>
    <div id='about-us-text' class='container mt-4'>
        <h1 class='fs-1'>
            <span id='2' class='editable'>
                <?php echo getTextFromId(2)[0]['text_field']; ?>
            </span>
        </h1>
        <div id='about-us-description'>
            <p class='fs-5'>
                <span id='3' class='editable'>
                    <?php echo getTextFromId(3)[0]['text_field']; ?>    
                </span>
            </p>
        </div>
        <div class="row m-4">
            <div class="col-md-3">
                <img src="<?php echo getPhotoFromName("headshot")[0]['file_path']?>" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1 class='fs-2'>
                    <span id='4' class='editable'>
                        <?php echo getTextFromId(4)[0]['text_field']; ?>
                    </span>
                </h1>
                <p class="fs-5">
                    <span id='5' class='editable'>
                        <?php echo getTextFromId(5)[0]['text_field']; ?>
                    </span>
                </p>
                <h1 class='fs-3'>
                    <span id='6' class='editable'>
                        <?php echo getTextFromId(6)[0]['text_field']; ?>
                    </span>
                </h1>
                <p class="fs-5">
                    <span id='7' class='editable'>
                        <?php echo getTextFromId(7)[0]['text_field']; ?> 
                    </span>   
                </p>
            </div>
        </div>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>
