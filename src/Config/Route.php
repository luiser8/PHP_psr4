<?php

namespace MyApp\Config;

class Route
{
    public static function Url()
    {
        switch($_GET){
            case isset($_GET['home']):
                require_once 'src/Views/Home/index.html';
            break;
            case isset($_GET['clients']):
                require_once 'src/Views/Clients/index.html';
                require_once 'src/Views/Clients/create.html';
            break;

            default:
                require_once 'src/Views/Error/404.html';
            break;
        }
    }
}