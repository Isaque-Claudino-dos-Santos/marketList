<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


spl_autoload_register(function ($classes) {
    $array = explode('\\',$classes);
    $path = '';
    $file = '';

    foreach($array as $value) {
        if(end($array) == $value) {
            $file = $value.'.php';
        }else {
            $path .= strtolower($value).'/';
        }
    }

    $res = './'.$path.$file;

    require_once $res;
});