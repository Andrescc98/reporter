<?php

namespace Libs;

use Libs\Sentencia;

/**
 * motor de consultas sql basico
 */
final class Query extends Sentencia
{


    static public function select(string $table, array $clause_array = null): array
    {
        if($clause_array){
            $sql = "SELECT * FROM {$table} WHERE ".self::sqlWhere($clause_array);
        }else{
            $sql = "SELECT * FROM {$table}";
        }
        return self::query($sql);
    }

    static public function insert(string $table, array $data): bool
    {

        $value_col = self::key_array_to_string_or_incognit($data);
        $incognit = self::key_array_to_string_or_incognit($data, true);

        $sql = "INSERT INTO {$table} ({$value_col}) VALUES ($incognit)";
        return self::query($sql, $data);
    }

    static public function update(string $table, array $data, array $clause_array) :bool
    {
        $set_value = self::setUpdate($data);

        $sql = 
        "UPDATE {$table} SET {$set_value} WHERE "
        .self::sqlWhere($clause_array);

        return self::query($sql, $data);
    }

    static public function delete(string $table, array $clause_array):bool{

        $sql = "DELETE  FROM {$table} WHERE ".self::sqlWhere($clause_array);

        return self::query($sql);
    }
    /**
     * genera los valores para las clause sql
     * 
     * @param array $data
     * 
     * @return string
     */
    static private function sqlWhere(array $data):string
    {
        $keys = array_keys($data);
        $where_string = "";
        foreach ($keys as $key) {

            if (is_string($data[$key])) {
                $where_string = $where_string . ", " . $key . "= '{$data[$key]}'";
            } else {
                $where_string = $where_string . ", " . $key . "=" . $data[$key];
            }
        }
        $where_string = preg_replace('/, /', "", $where_string, 1);
        return $where_string;
    }

    static private function setUpdate(array $data)
    {
        $keys = array_keys($data);
        $set_string = "";
        $index = 0;
        foreach ($keys as $key) {

            $set_string 
            ? $set_string = $set_string . ", " . $key . "= ?"
            : $set_string = $key . "= ?";

            $index++;
        }
        return $set_string;
    }
}
