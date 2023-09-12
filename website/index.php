<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        .carousel-indicators {
            display: none;
        }

        .carousel-inner {
            height: 0;
            padding-bottom: 45%;
        }

        .carousel-item {
            position: absolute !important;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .carousel-item img {
            height: 100%;
            object-fit: cover;
        }
    </style>  
</head>
<body>
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
                    echo "<img src='website/media/images/$image' class='d-block w-100'>";
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
</body>
</html>
