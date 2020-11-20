<?php
require __DIR__."/../../vendor/autoload.php";
use Controllers\UserController;

$userController = new UserController;


$userController->post_logout();

