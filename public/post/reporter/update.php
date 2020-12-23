<?php
require __DIR__."/../../../vendor/autoload.php";
use Controllers\ReporterController;
$reporterController= new ReporterController();

$reporterController->post_update_register();