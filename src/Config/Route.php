<?php

namespace MyApp\Config;

class Route
{
    public static function Url()
    {
        if(isset($_GET['clients'])){
            require_once 'src/Views/Clients/index.phtml';
        }if(isset($_GET['home'])){
            require_once 'src/Views/Home/index.phtml';
        } 
    }
}