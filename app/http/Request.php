<?php

namespace App\Http;

class Request {
    public static function all($array) {
        $values = [];
        foreach($array as $key) {
           $values[$key] = $_POST[$key];
        }
    }
}