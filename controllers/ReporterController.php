<?php

namespace Controllers;

use Exception;
use Libs\Controller;
use Libs\Query;

class ReporterController extends Controller
{
    public function __construct()
    {
        $this->is_session();
    }

    public function listView()
    {
        $persons = Query::select("reporters");
        echo $this->render("reporter/list", compact("persons"));
    }

    public function register()
    {
        echo $this->render("reporter/register");
    }

    public function post_register()
    {
        try{
            $query = Query::insert(
                "reporters", [
                    "first_name" => $_POST["first_name"],
                    "last_name" => $_POST["last_name"],
                    "cedula" => $_POST["cedula"],
                    "job" => $_POST["job"],
                    "id_user" => reset($_SESSION)["id_user"] 
                ]
            );
    
            $query 
                ? $this->response("agregado", 201) 
                : $this->response("error", 500);
        }catch(Exception $err){
            $this->response("error {$err->getMessage()}", 500);
        }

    }
}
