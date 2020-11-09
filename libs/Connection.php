<?php

namespace Libs;

use Config\Database;
use PDO;
use PDOException;

/**
 * maneja la conexion a la base de datos con PDO
 */
class Connection
{
    /**almacena instancia de PDO */
    private $link;
    /**almacena info de la base de datos */
    private $db_info;

    public function __construct()
    {
        $this->db_info = Database::info();

        $this->conn();
    }

    /**
     * instancia la conexion a PDO
     * 
     * @return void
     */
    private function conn(): void
    {
        try {
            $this->link = new PDO(

                $this->db_info["db_engine"] . ":" .
                    "dbname=" . $this->db_info["db_name"] .
                    ";host=" . $this->db_info["host"],

                $this->db_info["user"],
                $this->db_info["pass"],

                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
            );

            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexion a la base de datos </br> " . $e->getMessage());
        }
    }

    /**
     * retorna la conexion a la base de datos
     * 
     * @return object
     */
    public function getLink(): object
    {
        return $this->link;
    }

    /**
     * destruye la conexion y la info de la base de datos
     * 
     * @return void
     */
    public function __destruct()
    {
        $this->link = null;
        $this->db_info = null;
    }
}
