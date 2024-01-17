<?php
// file index giúp điều hướng tới các hàm ở trong controller
use controller\ProductsController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url = $_GET['url'];
    require_once 'controller/ProductsController.php';
    $productscontroller = new ProductsController();

switch ($url) {
    case '/':
        $productscontroller->listproducts();
        break;
    case 'addproducts':
        $productscontroller->addproducts();
        break;
    case 'edit_products':
        $productscontroller->editproducts();
        break;
    case 'delete_products':
        $productscontroller->deleteproducts();
        break;
}
