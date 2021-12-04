<?php

require_once('./autoload.php');
require_once('./apis/function.php');

use App\Http\Router;
use App\Controllers\HomeController;
use App\Controllers\RegisterProductsController;

$home = new Router();
$home->get('/',HomeController::index(),'home');

$registerProducts = new Router();
$registerProducts->get('/registerProducts',RegisterProductsController::index(),'registerProducts');
