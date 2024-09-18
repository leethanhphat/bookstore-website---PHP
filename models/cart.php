<?php
class Cart
{
    private $productName;
    private $price;
    private $quantity;
    private $total;

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function __construct($productName, $price, $quantity) {
        $this->productName = $productName;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->total = $price * $quantity; // Calculate the total upon object creation
    }
}
?>