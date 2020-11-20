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

    public function post_login()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = Query::select("users", compact("username"));
        $user = $user[0];

        if(empty($user)){
            $this->response("no encontrado", 404);
        }
        echo json_encode($user);
        if(!$password or !password_verify($password, $user["password"])){
            $this->response("contraseña invalida", 422);
        }
        $this->start($user);
        $this->response("", 204);
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

    public function post_logout()
    {
        $this->destroy();
        $this->response("", 204);
    }
}
