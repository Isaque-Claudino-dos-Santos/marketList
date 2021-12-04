<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Http\Request;
use Models\RegisterProducts;

class RegisterProductsController extends Controller {
    public static function index() {
        return Controller::view('registerProducts');
    }

    public static function register() {
        Request::all(RegisterProducts::$lable);
    }
}