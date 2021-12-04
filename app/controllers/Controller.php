<?php

namespace App\Controllers;

class Controller {
    public static function view($pageName) {
        return './views/'.$pageName.'.php';
    }
}