<?php

namespace App\Http;


class Router {
    private $routes = [];

    public function __construct()
    {   
        $this->server_uri = $_SERVER['REQUEST_URI'];
        $this->server_method = $_SERVER['REQUEST_METHOD'];
    }
                    
    public function get($uri,$class,$method,$surname = '') {
        $this->routes[$uri] = ['GET',$class,$method];
        $this->surname[$surname] = $uri;
    }

    public function execute() {
        $router = $this->routes[$this->server_uri];
        call_user_func_array([new $router[1],$router[2]],[]);
    }
}