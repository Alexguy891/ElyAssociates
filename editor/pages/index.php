<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>Home</title>
</head>
<body>
    <?php require 'support/header.php'; ?>
    <div id='home-carousel' class='carousel slide' data-bs-ride='carousel'>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#home-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#home-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#home-carousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <?php
                $images = getCarouselPhotos();
                foreach ($images as $index => $image) {
                    $activeClass = ($index == 0) ? 'active' : '';
                    echo "<div class='carousel-item $activeClass'>";
                    echo "<img src='".$image['file_path']."' class='d-block w-100'>";
                    echo "</div>";
                }
            ?>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#home-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div id='home-text' class='container mt-4'>
        <h1 id='mottos' class='fs-1'><div id='0' class='editable'><?php echo getTextFromId(0)[0]['text_field']; ?></div></h1>
        <div id='home-description'>
            <p class='fs-5'">
                <div id='1' class='editable'>
                    <?php echo getTextFromId(1)[0]['text_field']; ?>
                </div>
            </p>
        </div>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>
