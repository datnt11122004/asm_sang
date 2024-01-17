<?php

namespace controller;
use model\products;

require_once "model/products.php";

class ProductsController
{
    protected $products;

    public function __construct()
    {
        $this->products = new products();
    }

    public function listproducts()
    {
        echo "Đây là danh sách khách hàng";
        $products = $this->products->getproducts();
        include_once "view/Products/listproducts.php";
    }

    public function addproducts()
    {
        echo "Đây là trang thêm khách hàng";
        include_once "view/Products/addproducts.php";
        if (isset($_POST['them']) && ($_POST['them'])) {
            $id = $_POST["id"];
            $ten_sp = $_POST["ten_sp"];
            $mo_ta = $_POST["mo_ta"];
            $gia = $_POST["gia"];
            $this->products->addproducts($id, $ten_sp, $mo_ta, $gia);
            header("Location: index.php");

        }
    }

    public function editproducts()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_GET['id'];
            $ten_sp = $_POST['ten_sp'];
            $mo_ta = $_POST['mo_ta'];
            $gia = $_POST['gia'];
            $this->products->updateproducts($id, $ten_sp, $mo_ta, $gia);
            header("Location: index.php");
        } else if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $getproductsByID = $this->products->getproductsByID($id);
            include_once "view/Products/editproducts.php";

        }
    }

    public function deleteproducts()
    {
        $this -> products -> deleteProduct($_GET["id"]);
        header("location: index.php");
    }
}
