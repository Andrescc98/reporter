<?php
require __DIR__."/../../vendor/autoload.php";
use Controllers\UserController;

$userController = new UserController;

if($_POST){
    $userController->post_insert_register();
}
