<?php

class Database {
    private $pdo;
    private static $instance = null;

    private function __construct() {
        $config = require_once BASE_PATH . 'config/database.config.php';
   try { $this->pdo = new PDO($config['dsn'],$config['user'],$config['password'],$config['options']);
   }
   catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }


    public function query($sql,$params = []) {
  try {
 $stmt =  $this->pdo->prepare($sql);
 $stmt->execute($params);
 return $stmt;
}
catch (PDOException $e){
  echo 'query failed to process' . $e->getMessage();
}}
}
