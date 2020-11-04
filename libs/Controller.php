<?php
    namespace Libs;
    use League\Plates\Engine;

    abstract class Controller{

        public function __construct() {
            $this->template = new Engine("../views");
        }
    }