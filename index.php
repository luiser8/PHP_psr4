<?php 

namespace MyApp;

require __DIR__ . '/vendor/autoload.php';

use MyApp\Controllers\Layout\Head;
use MyApp\Controllers\Layout\Footer;
use MyApp\Config\Route;
//use MyApp\Controllers\Cliente\ClientController;

Head::Header();
Footer::Foo();
Route::Url();