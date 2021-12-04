<?php

require_once('./apis/function.php');
require_once('./bootstrep.php');
require_once('./autoload.php');

use Database\Config\Conection;

function serve() {
    exec('php -S'.URL_HOST.':'.URL_PORT .' -t .');  
}

function migrateUp() {
   $classes =  instanciarClass('database/migrations');
   foreach($classes as $class) {
       (new Conection)->createTable((new $class)->up());
    }
}

function migrateDown() {
    $classes =  instanciarClass('database/migrations');
   foreach($classes as $class) {
       (new Conection)->dropTable((new $class)->down());
    }
}

