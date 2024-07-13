<?php
    namespace controller;
    use models\UserModel;

    class UserController{
        public function getUser(){
            $userModel = new UserModel();
            return $userModel->getListUser();
        }
    }

    <?php
namespace Models;

use Config\Database;
use PDO;

class Product {
    private $conn;
    private $table = 'product';

    public $id;
    public $name;
    public $price;
    public $view;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getProducts() {
        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }