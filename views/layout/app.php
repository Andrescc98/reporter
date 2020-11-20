<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="/assets/style/bootstrap/css/bootstrap.min.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/assets/style/fontawesome-5/css/all.min.css">
    <!-- STYLES -->
    <link rel="stylesheet" href="/assets/style/style.css">
    <?= $this->section("style") ?>
    <title>Reporter | <?= $this->e($title) ?> </title>
</head>
<body>
    <?php if(!empty($_SESSION)): ?>
        <?= $this->fetch("partials/navbar") ?>
    <?php endif?>

    <main id="app" class="mt-5 container-fluid">
       <?= $this->section("main") ?>
    </main>


    <script src="/assets/style/bootstrap/js/jquery.min.js"></script>
    <!-- <script src="/assets/style/bootstrap/js/popper.min.js"></script> -->
    <script src="/assets/style/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/style/bootstrap/js/bootstrap.min.js"></script>
    
    <?php if(!empty($_SESSION)): ?>
        <script src="/assets/js/logout.js"></script>
    <?php endif?>

    <?= $this->section("scripts") ?>
</body>
</html>