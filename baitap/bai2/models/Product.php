<?php

namespace models;

use common\Database;
use PDO;


class Product
{
    private $conn;
    private $table = 'product';

    public $id;
    public $name;
    public $price;
    public $view;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getProducts()
    {
        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function addProduct()
    {
        $query = 'INSERT INTO ' . $this->table . ' (name, price, view) VALUES (:name, :price, :view)';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':view', $this->view);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
