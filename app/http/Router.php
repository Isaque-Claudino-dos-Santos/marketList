<?php

namespace App\Http;

class Router {
    private $uri;
    private $method;

    public function __construct()
    {   
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public static $name = [];
    
    public function get($req,$res,$url = '') {

        static::$name[$url] = $req;

        if($this->uri == $req && 
        $this->method == 'GET') {
            require_once $res;
        }
    }
}