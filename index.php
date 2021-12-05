<?php

require_once('./autoload.php');
require_once('./apis/function.php');

use App\Controllers\HomeController;
use App\Controllers\RegisterProductsController;
use App\Http\Router;

$routes = new Router();

$routes->get('/',HomeController::class,'index','home');
$routes->get('/registerProducts',RegisterProductsController::class,'index','registerProducts');

$routes->execute();