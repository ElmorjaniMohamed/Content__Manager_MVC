<?php
// Controller.php
namespace App\Controllers;


use App\Config\Database;
class Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = (new Database())->getInstance();
    }
}
