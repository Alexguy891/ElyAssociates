<footer class="footer pt-4">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-3">
            <h1><a href="#" class="navbar-brand logo" style="font-family:'Alegreya SC'">Ely &<br>Associates</a></h1>
        </div>
        <div class="col-lg-4">
            <ul class="list-unstyled contact-info mb-4">
            <li><i class="fas fa-envelope"></i> <?php echo getTextFromId(9)[0]['text_field']; ?></li>
            <li><i class="fas fa-phone"></i> <?php echo getTextFromId(10)[0]['text_field']; ?></li>
            <li><i class="fas fa-map-marker-alt"></i> <?php echo getTextFromId(11)[0]['text_field']; ?></li>
            </ul>
        </div>
        <div class="col-lg-2 text-center">
            <h5><?php echo getTextFromId(12)[0]['text_field']; ?></h5>
            <a href='contact_us.php' class="contact-link btn btn-outline-light" style="text-decoration:none">Click here</a>
        </div>
        </div>
    </div>
</footer>