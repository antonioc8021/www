<?php
class DB
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=pizzeria', 'dwes', 'abc123');
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>