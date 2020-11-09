<?php
    require __DIR__."/../vendor/autoload.php";
    use Controllers\UserController;

    $userController=new UserController;

    $userController->login();