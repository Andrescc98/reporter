<?php
    namespace Controllers;
    use Libs\Controller;

    class UserController extends Controller{

        public function login(){
            echo $this->render("user/login");
        }
    }