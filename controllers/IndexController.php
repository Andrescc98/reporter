<?php
    namespace Controllers;
    use Libs\Controller;

    class IndexController extends Controller{

        public function index(){
            $name="Andres Coronado";
            echo $this->template->render("index", compact("name"));
        }
    }
