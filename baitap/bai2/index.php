<?php
require_once 'common/Database.php';
require_once 'models/Product.php';
require_once 'controllers/ProductController.php';
require_once 'views/product_list.php';
require_once 'views/add_product.php';

use Controllers\ProductController;

$controller = new ProductController();

if (isset($_GET['act']) && $_GET['act'] == 'addproduct') {
    $controller->addProduct();
} else {
    $controller->listProducts();
}
