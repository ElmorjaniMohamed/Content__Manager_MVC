<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once './app/Config/Database.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new Database();
$conn = $db->connect();
$conn = null;