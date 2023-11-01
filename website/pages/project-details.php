<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>Project Details</title>
</head>
    <?php require 'support/header.php'; ?>
    <body>
    <div class="columnMain">
        <div class="row m-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Project Name</h1>
                    <h3 class="mb-4">City, ST</h3>
                    <p>Project Description Here. This project was completed on some date at some location. This project cost approximately some amount of money and took some specific amount of time to complete. This project was completed by some people. This project was completed for some client.</p>
                </div>
                <div class="col-lg-6">
                    <div class="container__details">
                        <a href="#">
                            <img src="../media/images/projects/test1.jpg" alt="Project Image" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="container__details">
                                        <a href="#">
                                            <img src="../media/images/projects/test1.jpg" alt="Project Image" class="img-fluid">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="container__details">
                                        <a href="#">
                                            <img src="../media/images/projects/test2.jpg" alt="Project Image" class="img-fluid">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="container__details">
                                        <a href="#">
                                            <img src="../media/images/projects/test3.jpg" alt="Project Image" class="img-fluid">
                                        </a>
                                    </div>
                                </td>
                                <!-- Add more columns with images and text as needed -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <script>
        const images = document.querySelectorAll(".container__details img");
        let imgSrc;
        // get images src onclick
        images.forEach((img) => {
            img.addEventListener("click", (e) => {
                imgSrc = e.target.src;
                console.log(imgSrc)
                imgModal(imgSrc);
            });
        });
    
        let imgModal = (src) => {
            const modal = document.createElement("div");
            modal.setAttribute("class", "modal");
            //add modal to the parent element 
            document.querySelector(".columnMain").append(modal);
            //adding image to modal
            const newImage = document.createElement("img");
            newImage.setAttribute("src", src);
            //creating the close button
            const closeBtn = document.createElement("i");
            closeBtn.setAttribute("class", "fas fa-times closeBtn");
            //close function
            closeBtn.onclick = () => {
                modal.remove();
            };
    
        modal.append(newImage, closeBtn);
        }
        </script>
    <?php require 'support/footer.php'; ?>
    </body>
</html>