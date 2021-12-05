<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


spl_autoload_register(function ($classes) {
    $class = str_replace('\\','/',$classes);
    $res = __DIR__.'/'.$class.'.php';
    require_once $res;
});