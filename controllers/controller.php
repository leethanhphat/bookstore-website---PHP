<?php
require_once("models/product_model.php");
class Controller{ 
    public $model;
    public function __construct()
    {
    $this->model = new ProductModel();
    }
    public function invoke()
    {
        if(isset($_GET["productid"])){
            $product = $this->model->getProduct($_GET["productid"]); 
            include ("views/home/productdetail.php");
        }else if (isset($_GET["search"])){
            include("show_item_list.php");
        }else if (isset($_GET["categoryid"])){
            include("show_item_list.php");
        }else
        {
            $products = $this->model->getProductList();
            include_once("views/home/shop.php") ;
        }
    }
}
?>