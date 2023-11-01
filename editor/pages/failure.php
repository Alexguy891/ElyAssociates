<!DOCTYPE html>
<html lang="en">
<?php require 'support/head.php'; ?>
<title>Success!</title>
</head>
<body>
    <?php require 'support/header.php'; ?>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1>Oh no!</h1>
        <p>Your message failed to send, please try again.</p>

        <div class="mt-4">
            <a href="index.php" class="btn btn-dark">Return Home</a>
            <a href="contact_us.php" class="btn btn-dark">Try Again</a>
        </div>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>