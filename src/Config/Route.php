<?php

namespace MyApp\Config;

class Route
{
    public static function Url()
    {
        if(empty($_GET)){
            require_once 'src/Views/Home/index.html';
        }if(isset($_GET['clients'])){
            require_once 'src/Views/Clients/index.html';
            require_once 'src/Views/Clients/create.html';
        }if(isset($_GET['home'])){
            require_once 'src/Views/Home/index.html';
        } 
    }
}