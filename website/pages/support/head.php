<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="scripts/contact_us.js"></script>
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
    
    .container img {
        transition: transform 0.3s;
    }

    .container a:hover img, .enlarge:hover {
        transform: scale(1.05); /* Increase the scale to slightly zoom in */
        filter: brightness(80%); /* Decrease brightness to darken the image */
    }   

</style>