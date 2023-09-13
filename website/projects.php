<!DOCTYPE html>
<html>
<head>
    <title> Projects </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!--Style-->
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
        }
        header {
            text-align: center;
            padding: 32px;
            font-size: 27px;
        }

        .column {
            float: left;
            width: 25%;
            padding: 0px;
        }

        .column img {
            margin-top: 12px;
        }
        .row:after {
           content: "";
           display: table;
           clear: both;
        } 

        img {
            width: 100%;
            padding: 0px;
            transition: .5s ease;
            backface-visibility: hidden;
        }


        .cover {
            transition: .5s ease;
            opacity: 0;
            position: absolute; 
            top: 15%;
            left: 15%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%); 
        }
        
        .container {
            position: relative;
        }

        .text {
            background-color: black;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            text-align: top;
        }

        .container:hover .img {
            opacity: 0.5;
        }

        .container:hover .cover {
            opacity: 1;
        }

        img:hover {
            opacity: 0.5;
        }





    </style>
    </head>
    <header> Projects </header>

    <body>


    <!--********* PHOTO GRID START**********-->

    <div class = "row">

        <div class = "column">
        <!--COLUMN ONE-->
            <!-- Some Photos-->
            <!--Photo Start-->
            <div class = "container">
                <a href="project-details.php">
                <img src = "media/images/projects/test1.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!--Photo Start-->
             <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test2.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!--Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test3.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!--Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test4.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->

        </div>
        <!--END COLUMN ONE-->

        <div class = "column">
        <!--COLUMN TWO-->

            <!-- Some Photos -->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test1.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test2.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test3.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test4.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
        </div>
        <!--END COLUMN TWO-->

        <div class = "column">
            <!--COLUMN THREE-->

            <!--Some Photos-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test1.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test2.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test3.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test4.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->

        </div>
        <!--END COLUMN THREE-->

        <div class = "column">
            <!--COLUMN FOUR-->

            <!--Some Photos-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test1.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test2.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test3.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
            <!-- Photo Start-->
            <div class = "container">
                <a href = "project-details.php">
                <img src = "media/images/projects/test4.jpg">
                <div class = "cover">
                    <div class = "text"> test </div>
                </div>
                </a>
            </div>
            <!--Photo End-->
        </div>
        <!--END COLUMN FOUR-->
    </div>

  <!--********* PHOTO GRID END**********-->

    </body>

</html>