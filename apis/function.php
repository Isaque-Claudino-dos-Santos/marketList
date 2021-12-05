<?php

use App\Http\Router;

require_once('./bootstrep.php');

function dd($res,$die = false) {
    echo '<pre>';

    print_r($res);
    
    echo '</pre>';
    if($die == true) $die;
} 

function instanciarClass($defaultPath) {
    $files = scandir($defaultPath);
    
    foreach($files as $file) {
        if($file != '.' && $file != '..') {
            require_once './'.$defaultPath.'/'.$file;
           $class = (array_filter(explode('.php',$file))); 
           return $class;
        }
    }
}


function linkCss($file) {
    $path = '/views/css/';
    return 'http://'.URL_HOST.':'.URL_PORT.$path.$file;
}