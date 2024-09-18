<?php

require_once("product.php");
require_once("modules/db_module.php");

class ProductModel
{
    public function getProductList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_products  ");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product(
                $rows["productID"],
                $rows["product_name"],
                $rows["categoryID"],
                $rows["price"],
                $rows["stock_quantity"],
                $rows["product_img"]
            );

            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getProductListByQuery($query){
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_products where   ". $query."");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product(
                $rows["productID"],
                $rows["product_name"],
                $rows["categoryID"],
                $rows["price"],
                $rows["stock_quantity"],
                $rows["product_img"]
            );

            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }


    public function getProduct($productID)
    {
        $allproducts = $this->getProductList();
        foreach ($allproducts as $product)
            if ($product->getProductID() === $productID)
                return $product;
        return null;
    }
}
