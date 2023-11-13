<?php 
    require('support/head.php');

    if(isset($_POST["submit"])) {
        //Moves pictures added for project into the correct folder
        $file_names = $_FILES['img_upload']['name'];
        $file_tmps = $_FILES['img_upload']['tmp_name'];
        $count = count($file_names);

        //For loop to go through each picture 
        for($i = 0; $i < $count; $i++) {
            move_uploaded_file($file_tmps[$i], "../media/images/projects/" . $file_names[$i]);
        }
        
        //Specifies variables needed to fill database such that project can be added properly
        $project_name = $_POST["project_name"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $date = $_POST["date"];
        $project_description = $_POST["proj_description"];

        //Function in config.php to add the new project
        addNewProject($file_names, $count, $project_name, $city, $state, $date, $project_description);

        //Sends user back to the projects page to see their work.
        echo "
            <script type='text/javascript'> 
                window.location.assign('projects.php')
            </script>";
        

    }

?>

<!DOCTYPE html>
<title>Add a Project!</title>
</head>
    <?php require 'support/header.php'; ?>

<body>
    <h3 style="text-align: center;">Add a Project</h3>
    <form method="POST" action="add_project.php" enctype ="multipart/form-data">
        <div class="mb-3">
            <label for="project_name">Project Name: </label>
            <input type="text" id="project_name" name="project_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City:</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State:</label>
            <select class="form-select" id="state" name="state" required>
                <option value="" disabled selected>Select state</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date Taken:</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="img_upload">Upload Images:</label>
            <input type="file" id="img_upload" name="img_upload[]" class="form-control" multiple accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="proj_description" class="form-label">Project Description</label>
            <textarea class="form-control" id="proj_description" name="proj_description" rows="3"></textarea>
        </div>
        <div class="mb-3" style="text-align: center;">
            <a href="projects.php">
                <input type = "submit" value= "Add Project!" name="submit" 
                onclick="return confirm('Are you sure you want to add this project? Changes cannot be reverted!')"/>
            </a>
        </div>
    </form>

    <?php require 'support/footer.php'; ?>
</body>
</html>
