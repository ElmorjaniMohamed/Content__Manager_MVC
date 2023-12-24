<?php
// Database.php
namespace App\Config;
use PDO;
use PDOException;

class Database
{
    private static $db;

    public function __construct()
    {
        // Empêcher l'instanciation externe
    }

    public static function getInstance()
    {
        if (!isset(self::$db)) {
            $host = $_ENV['DB_HOST'];
            $database = $_ENV['DB_NAME'];
            $username = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];

            $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

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
?>
