<!DOCTYPE html>
<html>
<?php require 'support/head.php'; ?>
<title>Projects</title>
</head>
    <?php require 'support/header.php'; ?>

<body>
    <!-- Table structure with Bootstrap grid system -->
    <div class="container mt-5">
        <table class="table">
            <tbody>
                <?php echo getProjectNamesAndCovers(); ?>
            </tbody>
        </table>
    </div>
    <?php require 'support/footer.php'; ?>
</body>
</html>