<?php

namespace Libs;

use Config\Database;
use PDO;
use PDOException;

class Connection
{

    private $link;
    private $db_info;

    public function __construct()
    {
        $this->db_info = Database::info();

        $this->conn();
    }

    private function conn()
    {
        try {
            $this->link = new PDO(

                $this->db_info["db_engine"] . ":".
                "dbname=" . $this->db_info["db_name"].
                ";host=" . $this->db_info["host"],

                $this->db_info["user"], 
                $this->db_info["pass"],
            
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "conectado";
            
            
        } catch (PDOException $e) 
        {
            die("Error en la conexion a la base de datos </br> " . $e->getMessage());
        }
    }

    public function getLink()
    {
        return $this->link;
    }

    public function __destruct()
    {
        $this->link=null;
        $this->db_info=null;
    }
}
