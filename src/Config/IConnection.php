<?php

namespace MyApp\Config;

interface IConnection{
    const HOST = 'localhost';
    const UNAME = 'root';
    const PW = '19651249';
    const DBNAME = 'dbtest';
    
    public static function doConnect();
}