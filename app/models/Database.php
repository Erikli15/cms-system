<?php
class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $config = require "../config/databese.php";

        try {
            $this->connection = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                $config['username'],
                $config['password']
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failded:" . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null){
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
}
?>
