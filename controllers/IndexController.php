<?php
    namespace Controllers;
    use Libs\Controller;

    class IndexController extends Controller{

        public function index(){
            $this->is_session();
            echo $this->render("index");
        }
    }
