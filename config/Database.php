<?php
    namespace Config;

    class Database{

        static private $database_info = [
            "db_engine" => "mysql",
            "db_name"   => "reporter",
            "host"      => "localhost",
            "user"      => "root",
            "pass"      => "andrescc98"
        ];

        static public function info(){
            return self::$database_info;
        }
    }