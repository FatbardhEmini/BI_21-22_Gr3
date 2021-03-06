<!DOCTYPE html>
<html lang="en" manifest="manifest.appcache">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>App Alicious - <?php echo $title ?></title>
        <link rel="stylesheet" href="/public/styles/main.css" />
    </head>
    <body>
    <!-- Header -->
    <?php include('views/partials/header.php') ?>
    <!-- Content -->
    <?php if(isset($child)) include($child) ?>
    <!-- Footer -->
    <?php include('views/partials/footer.php') ?>
    <!-- Scripts -->
    <script src="/public/js/helpers.js"></script>
    <script src="/public/js/validations.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>
</html>