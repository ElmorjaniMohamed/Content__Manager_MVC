<?php
namespace App\Controllers;

use App\Config\Database;

class Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    protected function render($view, $data = [])
    {
        $title = $data['title'] ?? '';
        $content = $data['content'] ?? '';

        include "../app/Views/$view.php";
    }

}
