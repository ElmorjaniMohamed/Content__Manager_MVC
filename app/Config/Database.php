<?php
// Database.php
namespace App\Config;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database
{
    private static $db;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$db)) {
            
            $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->load();

            
            $host = $_ENV['DB_HOST'];
            $port = $_ENV['DB_PORT'];
            $database = $_ENV['DB_DATABASE'];
            $username = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];

            
            $dsn = "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4";

            try {
                
                self::$db = new PDO($dsn, $username, $password);
                
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }

        return self::$db;
    }
}
