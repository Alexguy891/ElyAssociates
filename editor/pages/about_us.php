<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>About Us</title>
</head>
<body>
    <?php require 'support/header.php'; ?>
    <div id='about-us-text' class='container mt-4'>
        <h1 class='fs-1'>
            <div id='2' class='editable'>
                <?php echo getTextFromId(2)[0]['text_field']; ?>
            </div>
        </h1>
        <div id='about-us-description'>
            <p class='fs-5'>
                <div id='3' class='editable'>
                    <?php echo getTextFromId(3)[0]['text_field']; ?>    
                </div>
            </p>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <img src="<?php echo getPhotoFromName("headshot")[0]['file_path']?>" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1 class='fs-2'>
                    <div id='4' class='editable'>
                        <?php echo getTextFromId(4)[0]['text_field']; ?>
                    </div>
                </h1>
                <p class="fs-5">
                    <div id='5' class='editable'>
                        <?php echo getTextFromId(5)[0]['text_field']; ?>
                    </div>
                </p>
                <h1 class='fs-3'>
                    <div id='6' class='editable'>
                        <?php echo getTextFromId(6)[0]['text_field']; ?>
                    </div>
                </h1>
                <p class="fs-5">
                    <div id='7' class='editable'>
                        <?php echo getTextFromId(7)[0]['text_field']; ?> 
                    </div>   
                </p>
            </div>
        </div>
        <div class='row mt-4'>
            <h1 class='fs-1'>
                Awards & Certifications
            </h1>
            <div class="col-md-2">
                <img src="../media/images/award.jpg" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1 class='fs-2'>
                    Award 1
                </h1>
                <p class="fs-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class='row mt-4'>
            <div class="col-md-2">
                <img src="../media/images/award.jpg" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1 class='fs-2'>
                    Award 2
                </h1>
                <p class="fs-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class='row mt-4'>
            <div class="col-md-2">
                <img src="../media/images/award.jpg" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1 class='fs-2'>
                    Award 3
                </h1>
                <p class="fs-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>
