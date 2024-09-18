<?php
require_once("db_module.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST["categoryname-input"];

    $sql = "INSERT INTO tbl_categories (category_name) VALUES ('$category_name')";

    $link = null;
    taoKetNoi($link);

    if (chayTruyVanKhongTraVeDL($link, $sql) === TRUE) {
        header("Location: ../admin.php");
    } else {
        echo "Lỗi: ";
    }
}
