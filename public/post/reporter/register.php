<?php

require __DIR__."/../../../vendor/autoload.php";
use Controllers\ReporterController;
use Libs\Method;

$reporterController = new ReporterController();

if(Method::post()){
    $reporterController->post_register();
}