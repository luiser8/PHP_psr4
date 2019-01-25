<?php

namespace MyApp\Controllers\Layout;

class Head
{
    public static function Header()
    {
       require_once 'src/Views/Templates/head.phtml';
    }
}

