<?php 

namespace MyApp;

require __DIR__ . '/vendor/autoload.php';

use MyApp\Controllers\Layout\Head;
use MyApp\Controllers\Layout\Footer;
use MyApp\Config\Route;
//use MyApp\Controllers\Cliente\ClienteController;

Head::Header();
Footer::Foo();
Route::Url();

//$cliente = new ClienteController();
//var_dump($cliente->Index());
//$cliente->Create(1, "Luisa", "Rondon", "luisae.rondon@gmail.com");