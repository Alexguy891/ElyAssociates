<!DOCTYPE html>
<html>
    <head>
    <!--Font for Close Button-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script async src="https://kit.fontawesome.com/6cc05e1e8e.js" crossorigin="anonymous"></script>
    
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
            align-items: center;
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
            margin: 0px;
            float: bottom;
            width: 50%;
            padding: 0px;
        }

        img {
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            transition: .5s ease;
            padding-bottom: 2px;
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

        .container {
            position: relative;
        }

        .div {
            text-align: center;
        }

         /* img:hover {
            cursor: pointer;
        }  */

        .modal {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.733);
            margin-top: -1px;
            animation: zoom 0.3s ease-in-out;
        }

        .modal img {
            width: 100%;
            object-fit: cover;
        }

        .closeBtn {
            color: rgba(255, 255, 255, 0.87);
            font-size: 25px;
            position: absolute;
            top: 0;
            right: 0;
            margin: 20px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        .closeBtn:hover {
            color: rgb(255, 255, 255);
        }

        .text {
            background-color: transparent; 
            color: white;
            font-size: 16px;
            padding: 10px 10px;
            text-align: top;
        }
        .cover {
            transition: .5s ease;
            opacity: 0;
            position: absolute; 
            top: 90%;
            left: 85%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%); 
        }

        .container:hover {
            cursor: pointer;
        }


        .container:hover .img {
            opacity: .5;
        }

        .container:hover .cover {
            opacity: 1;
        }

        @keyframes zoom {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
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
                        <div class = "container">
                            <img src = "media/images/projects/test1.jpg">
                            <div class = "cover">
                                <div class = "text"> Click Image to Enlarge </div>
                            </div>
                        </div>
                        <div class = "container">
                            <img src = "media/images/projects/test2.jpg">
                            <div class = "cover">
                                <div class = "text"> Click Image to Enlarge </div>
                            </div>
                        </div>
                    </div>
                    <div class = "column">
                        <div class = "container">
                            <img src = "media/images/projects/test3.jpg">
                            <div class = "cover">
                                <div class = "text"> Click Image to Enlarge </div>
                            </div>
                        </div>
                        <div class = "container">
                            <img src = "media/images/projects/test4.jpg">
                            <div class = "cover">
                                <div class = "text"> Click Image to Enlarge </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>
        
        const images = document.querySelectorAll(".container img");
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

    </body>


</html>