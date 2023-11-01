<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>Projects</title>
</head>
    <?php require 'support/header.php'; ?>

<body>
    <!-- Table structure with Bootstrap grid system -->
    <div class="container mt-5">
        <table class="table">
            <tbody>
                <tr>
                    <td class="col-sm-4">
                        <div class="container">
                            <a href = "project-details.php">
                                <div class = "image">
                                        <img src="../media/images/projects/test1.jpg" class="img-fluid">
                                    <div class = "text"> <p> Testing Image 1 </p> </div>
                                </div>
                            </a>
                        </div>
                    </td>
                    <td class="col-sm-4">
                        <div class="container">
                            <a href="project-details.php">
                                <div class = "image">
                                    <img src="../media/images/projects/test2.jpg" class="img-fluid">
                                    <div class = "text"> <p> Testing Image 2 </p> </div>
                                </div>
                            </a>
                        </div>
                    </td>
                    <td class="col-sm-4">
                        <div class="container">
                            <a href="project-details.php">
                            <div class = "image">
                                <img src="../media/images/projects/test3.jpg" class="img-fluid">
                                <div class = "text"> <p> Testing Image 3 </p> </div>
                            </div>
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- Add more rows and content as needed -->
            </tbody>
        </table>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>