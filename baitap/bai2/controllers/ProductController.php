<?php

namespace controllers;

use Models\Product;
use PDO;

$product = new Product();
$result = $product->getProducts();
$products = $result->fetchAll(PDO::FETCH_ASSOC);

// Kiểm tra biến $products
if ($products === false) {
    $products = [];
}
// include_once '../views/product_list.php';


class ProductController
{
    public function listProducts()
    {
        $product = new Product();
        $result = $product->getProducts();
        $products = $result->fetchAll(PDO::FETCH_ASSOC);

        // Truyền biến $products tới view
        // include_once '../views/product_list.php';
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = new Product();
            $product->name = $_POST['name'];
            $product->price = $_POST['price'];
            $product->view = $_POST['view'];

            if ($product->addProduct()) {
                header('Location: /index.php');
            } else {
                echo 'Error adding product';
            }
        } else {
            // include_once '../views/add_product.php';
        }
    }
}
