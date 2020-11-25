<?php
namespace Libs;

    
/**
 * verifica que el metodo de peticion sea valido
 * 
 * 
 */
class Method{

    public static function __callStatic($name, $arguments)
    {
        $upper_name = strtoupper($name);

        return $_SERVER["REQUEST_METHOD"] === $upper_name;

    }
}