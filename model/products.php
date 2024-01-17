<?php

namespace model;

require_once "BaseModel.php";

class products extends BaseModel
{
    public function getproducts()
    {
        $sql = "SELECT * FROM products";
        return $this->dataProcess($sql);
    }

    public function getproductsByID($id)
    {
        $sql = "SELECT * FROM products where id = '$id'";
        return $this->dataProcess($sql, false);
    }

    public function addproducts($id, $ten_sp, $mo_ta, $gia)
    {
        $sql = "INSERT INTO products(ten_sp,mo_ta,gia) VALUES ('$ten_sp', '$mo_ta', '$gia')";
        return $this->dataProcess($sql);
    }

    public function updateproducts($id, $ten_sp, $mo_ta, $gia)
    {
        $sql = "UPDATE products SET ten_sp = '$ten_sp', mo_ta = '$mo_ta', gia = '$gia' WHERE id = '$id'";
        return $this->dataProcess($sql);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products where id = '$id'";
        $this->dataProcess($sql);
    }
}

