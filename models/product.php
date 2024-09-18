<?php
class Product{

    private $productID ;
    private $productName;
    private $categoryID ; 
    private $price;
    private $stockQuantity;
    private $image;
    public function getProductID(){return $this->productID;}
    public function getProductName(){return $this->productName;}
    public function getCategoryID(){return $this->categoryID;} 
    public function getPrice(){return $this->price;}
    public function getStockQuantity(){return $this->stockQuantity;}
    public function getImage(){return $this->image;}

    public function __construct($productID, $productName, $categoryID, $price,$stockQuantity,$image)
    {
    $this->productID = $productID;
    $this->productName = $productName; 
    $this->categoryID = $categoryID;
    $this->price = $price;
    $this->stockQuantity = $stockQuantity;
    $this->image = $image;

    }
    public function __toString()
    {
    return "Product($this->productID, $this->productName, $this->categoryID, $this->price,$this->stockQuantity, $this->image)";
    }
}
?>