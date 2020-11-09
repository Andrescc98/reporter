<?php

namespace Controllers;

use Libs\Controller;
use Libs\Query;

class UserController extends Controller
{

    public function login()
    {
        echo $this->render("user/login");
    }

    public function register()
    {
        echo $this->render("user/register");
    }

    public function post_insert_register()
    {

        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        Query::insert("users", compact("username", "password"));

        $this->response("creado", 201);

        
    }
}
