<?php

namespace Database\Config;
use PDOException,PDO;

require_once('./bootstrep.php');

class Conection {
    private $pdo;
    
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:dbname='.DB_NAME.';port='.DB_PORT.';host='.DB_HOST , DB_USER,DB_PASS);
        }catch(PDOException $e) {
            echo '<p style="color: red;"> Error MYSQl '. $e->getMessage().'<p>';
        }
    }

    public function createTable($array) {
        $props = '';
        $table = '';
        foreach($array as $key => $value) {
            if (end($array) == $value) {
                $props .= $key.' '.$value;
            } elseif ($key == 'table') {
                $table = $value;
            } else {
                $props .= $key.' '.$value.', ';
            }
        }
        $query = 'create table '.$table.' ('. $props .' )';
        $cmd = $this->pdo->prepare($query);
        $cmd->execute();
    }

    public function dropTable($table) {
        $cmd = $this->pdo->prepare('drop table '.$table);
        $cmd->execute();
    }
}