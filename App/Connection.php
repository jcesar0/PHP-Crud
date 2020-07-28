<?php
namespace app;

use PDO;

class Connection {
    private static $instance;

    public static function getConnection() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=localhost;dbname=tarefasdb;", "root", "123456789");
        }
        return self::$instance;
    }
    

}