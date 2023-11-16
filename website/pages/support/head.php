<head>
    <?php require 'config.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="../../scripts/contact_us.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function(){
            emailjs.init("yaZw2HEajFpg_RM2O");
        })();
    </script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    .navbar {
            padding:20px;
            background-color: #7B8C6C;
    }

    .navbar li a{
        color: #FFFEEB;
    }

    footer, footer a {
            color: #FFFEEB;
    }

    footer{
        background-color: #7B8C6C;
    }
    
    .image {
        position: relative;
    }

    .text {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        background-color: #7B8C6C;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        transition: 0.6s;
        color: white;
    }

    .text:hover {
        cursor: pointer;
        opacity: .9;
    } 

    .text p {
        font-family: "Alegreya SC";
        font-size: 30px;
    }

     .container__details img {
        transition: transform 0.3s;
    } 

    .container__details a:hover img, .enlarge:hover { 
        transform: scale(1.05);
        filter: brightness(80%);
    } 

    .modal {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #7B8C6C;
        opacity: 1;
        margin-top: -1px;
        animation: zoom 0.3s ease-in-out;
    }

    .modal img {
        width: 50%;
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

    #mottos {
        white-space: pre;
    }
</style>