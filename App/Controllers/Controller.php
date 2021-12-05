<?php

namespace App\Controllers;

class Controller {
    public static function view($pageName) {
        require_once './views/'.$pageName.'.php';
    }
}