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
}
