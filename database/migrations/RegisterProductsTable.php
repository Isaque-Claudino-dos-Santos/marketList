<?php

class RegisterProductsTable {
    private $table = 'products';
    public function up() {
        return [
            'table' => $this->table,
            'id' => 'int not null primary key auto_increment',
            'name' => 'varchar(200) not null',
            'price' => 'float(50) not null',
            'category' => 'varchar(100) not null',
        ];
    }


    public function down() {
       return $this->table;
    }
}