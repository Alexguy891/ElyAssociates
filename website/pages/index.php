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
                $images = ['carousel1.jpg', 'carousel2.jpg', 'carousel3.jpg'];
                foreach ($images as $index => $image) {
                    $activeClass = ($index == 0) ? 'active' : '';
                    echo "<div class='carousel-item $activeClass'>";
                    echo "<img src='../media/images/$image' class='d-block w-100'>";
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
        <h1 class='fs-1'>
            Our motto 1<br>
            Our motto 2<br>
            Our motto 3
        </h1>
        <div id='home-description'>
            <p class='fs-5'>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    
            </p>
        </div>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>
