<?php

namespace App\Controllers;
use App\Controllers\Controller;

class HomeController extends Controller {
    public static function index() {
        return Controller::view('home');
    }
}