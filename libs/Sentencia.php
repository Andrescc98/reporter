<?php

namespace Libs;

use Exception;
use Libs\Connection;

class Sentencia
{
    /**almacena instancia de connection */
    static private $conn;
    static private $pdo;


    /**
     * ejecuta las sentencias PDO
     * 
     * @param string $sql
     * @param array $data
     * 
     * 
     */
    static protected function query(string $sql, array $params = null)
    {
        self::$conn = new Connection();
        self::$pdo = self::$conn->getLink();

        try {
            $sentence = self::$pdo->prepare($sql);
            $sentence->execute($params ? array_values($params) : null);

            // si es la consulta es un select retorna un array de la info
            // en caso contrario retorna un booleno
            return self::is_select($sql)
                ? $sentence->fetchAll()
                : true;
        } catch (Exception $e) {
            die("error en la consulta " . $e->getMessage());
        } finally {
            self::$conn = null;
            self::$pdo = null;
        }
    }

    /**
     * determina si la consulta sql es un select
     * 
     * @param string $sql
     * 
     * @return bool
     */
    static private function is_select(string $sql): bool
    {

        $data = explode(" ", $sql)[0];
        $data = strtolower($data);

        return $data === "select";
    }

    /**
     * toma los keys del array o simbolos de incognito para consultas sql
     * 
     * @param array $key_array
     * @param bool $inconig
     * 
     * @return string
     */
    static protected function key_array_to_string_or_incognit(array $key_array, bool $inconig = false): string
    {
        $keys = array_keys($key_array);
        $key_string = "";
        foreach ($keys as $key) {
            if ($inconig) {
                $key_string = $key_string . ", " . "?";
            } else {
                $key_string = $key_string . ", " . $key;
            }
        }
        $key_string = preg_replace('/, /', "", $key_string, 1);
        return $key_string;
    }
}
