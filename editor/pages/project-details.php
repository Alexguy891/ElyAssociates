<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>Project Details</title>
</head>
    <?php require 'support/header.php'; ?>
    <body>
    <div class='columnMain'>
        <div class='row m-5'>
            <?php
                $projectId = $_GET['id'];
                $project = getProjectFromId($projectId);
                $projectImages = getProjectImagesFromId($projectId);

                echo "
                <div class='row'>
                    <div class='col-lg-6'>
                        <h1>".$project[0]['project_name']."</h1>
                        <h3 class='mb-4'>".$project[0]['project_city'].", ".$project[0]['project_state']."</h3>
                        <p>".$project[0]['project_description']."</p>
                    </div>
                    <div class='col-lg-6'>
                        <div class='container__details'>
                            <a href='#'>
                                <img src='".$projectImages[0]['file_path']."' alt='Project Image' class='img-fluid'>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='row mt-5'>
                <div class='col'>
                    <table class='table'>
                        <tbody>";

                array_shift($projectImages);

                $i = 0;

                foreach ($projectImages as $image) {
                    if ($i % 3 == 0) {
                        echo "<tr>";
                    }
                    
                    echo "<td>
                        <div class='container__details'>
                            <a href='#'>
                                <img src='".$image['file_path']."' alt='Project Image' class='img-fluid'>
                            </a>
                        </div>
                    </td>";
                    
                    if($i % 3 == 2) {
                        echo "</tr>";
                    }
            
                    $i++;
                }
            
                if ($i % 3 != 0) {
                    echo "</tr>";
                }
                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <script>
        const images = document.querySelectorAll('.container__details img');
        let imgSrc;
        // get images src onclick
        images.forEach((img) => {
            img.addEventListener('click', (e) => {
                imgSrc = e.target.src;
                console.log(imgSrc)
                imgModal(imgSrc);
            });
        });
    
        let imgModal = (src) => {
            const modal = document.createElement('div');
            modal.setAttribute('class', 'modal');
            //add modal to the parent element 
            document.querySelector('.columnMain').append(modal);
            //adding image to modal
            const newImage = document.createElement('img');
            newImage.setAttribute('src', src);
            //creating the close button
            const closeBtn = document.createElement('i');
            closeBtn.setAttribute('class', 'fas fa-times closeBtn');
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