<?php
require __DIR__."/../../vendor/autoload.php";
use Controllers\UserController;
use Libs\Method;

$userController = new UserController;

if(Method::post()){
    $userController->post_logout();
};

