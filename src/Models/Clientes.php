<?php
namespace MyApp\Models;

use MyApp\Config;

class Clientes
{
    private static $operations;
    private $id_cliente;
    private $first_name;
    private $last_name;
    private $email;
    
    //Get operations generic
    public static function Get($table)
    {
        $sql = Config\DB::doConnect()->query("SELECT * FROM {$table}");
        while($rows = $sql->fetch_assoc()){
            self::$operations[] = $rows;
        }
        return self::$operations;
    }
    
    //Save operations generic
    public static function Save($table, $fields, $values){
        $sql = "INSERT INTO {$table}(id_client, first_name, last_name, email)VALUES(
                NULL, '{$values['first_name']}', '{$values['last_name']}', '{$values['email']}')";
        return Config\DB::doConnect()->query($sql);
    }
}