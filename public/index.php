<?php
    require __DIR__."/../vendor/autoload.php";
    
    use Controllers\IndexController;
    $index=new IndexController;

    $index->index();