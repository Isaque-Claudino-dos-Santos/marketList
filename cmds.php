<?php
require_once('./apis/comands.php');


switch ($argv[1]) {
    case 'serve':
        serve();
        break;
    case 'migrateUp':
        migrateUp();
        break;
    case 'migrateDown':
        migrateDown();
        break;
}