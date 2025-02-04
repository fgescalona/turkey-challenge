<?php
class Database
{
    private static $instance = null;
    private $pdo;

    private $host = 'localhost';
    private $dbname = 'turkey_challenge';
    private $username = 'your_user';
    private $password = 'your_password';

    private function __construct()
    {
        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}
