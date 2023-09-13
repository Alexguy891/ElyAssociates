<!DOCTYPE html>
<html>
    <head>
    <title> Projects Details </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!--STYLE-->
    <style>
        header {
            text-align: center;
            padding: 32px;
            font-size: 40px;
        }

        .page {
            display: flex;
            justify-content: center;
            min-height: 100%;
            /* background-image: linear-gradient(to top left, rgb(21, 68, 138), rgb(0, 0, 0)); */
        }

        .columnMain {
            display: flex;
            padding: 10px;
            flex-direction: column;
            justify-content: flex start;
            align-items: center;
            width: 95%;
            background-color: rgb(0, 0, 0);
            border: 2px solid rgb(0, 0, 0);
            margin: auto;
        }

        h1 {
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            padding: 10px;
        }

        p, ul {
            color: white;
            font-size: 15px;
            text-align: center;
            padding: 10px;
        }

        .column {
            text-align: center;
            margin: auto;
            float: bottom;
            width: 90%;
            padding: 0px;
        }

        img {
            text-align: center;
            display:block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            transition: .5s ease;
            padding-bottom: 2px;
        }

        img:hover{
            opacity: 0.5;
        }

        button {
            position: absolute;
            top: 130px;
            left: 1600px;
            background-color: rgb(0, 0, 0);
            color: white;
            border: 2px solid white;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        button:hover {
            background-color: white;
            color: black;
        }



    </style>
    <!--END STYLE-->




    </head>
    <header> Project Details </header>

    <body>
        <div class = "page">
            <div class = "columnMain"> <!-- This is the main column in the center of the page on which the text is written-->
                <h1> Project Name Here | Project Location Here </h1>

                <a href = "projects.php">
                    <button class = "button"> Return to Projects </button> 
                </a>

                <p> Project Description Here 
                    This project was completed on some date at some location. This project cost approximately some amount of money and took
                    some specific amount of time to complete. This project was completed by some people. This project was completed for some client.
                </p>
                <ul>
                    <li> Fact 1 </li>
                    <li> Fact 2 </li>
                    <li> Fact 3 </li>
                    <li> Fact 4 </li>
                </ul>
                <div class = "row">
                    <div class = "column"> <!-- This column is for assisting with photo placement -->
                    <!--PHOTOS-->
                        <img src = "media/images/projects/test1.jpg">
                    </div>
                    <div class = "column">
                        <img src = "media/images/projects/test3.jpg">
                    </div>
                </div>
            </div>

        </div>

    </body>


</html>