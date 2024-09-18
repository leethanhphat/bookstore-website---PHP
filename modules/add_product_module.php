<?php
require_once("db_module.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["productname-input"];
    $categoryID = $_POST["category-input"];
    $price = $_POST["price-input"];
    $stock_quantity = $_POST["quantity-input"];
    $product_img = $_POST["img-input"];

    $sql = "INSERT INTO tbl_products (product_name, categoryID, price, stock_quantity, product_img) VALUES ('$product_name', '$categoryID', '$price', '$stock_quantity', '$product_img')";
    
    $link = null;
    taoKetNoi($link);

    if (chayTruyVanKhongTraVeDL($link, $sql) === TRUE) {
        header("Location: ../admin.php");
    } else {
        echo "Lỗi: ";
    }
}
?>
