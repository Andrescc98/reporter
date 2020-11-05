<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/style/fontawesome-5/css/all.min.css">
    <title>Reporter | <?= $this->e($title) ?> </title>
</head>
<body>
    <?= $this->section("navbar") ?>
    <main id="app">
       <?= $this->section("main") ?>
    </main>


    <script src="/assets/style/bootstrap/js/jquery.min.js"></script>
    <!-- <script src="/assets/style/bootstrap/js/popper.min.js"></script> -->
    <script src="/assets/style/bootstrap/js/bootstrap.min.js"></script>

    <?= $this->section("scripts") ?>
</body>
</html>