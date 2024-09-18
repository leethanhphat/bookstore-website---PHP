<?php
require_once("models/product_model.php");
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = is_numeric($page) ? $page : 1;
$from = ($page - 1) * NUM_PROD_PER_PAGE;

$model = new ProductModel();

if (isset($_GET["categoryid"])) {
    $categoryid = $_GET["categoryid"];
    $query = " categoryID = " . $categoryid . "";
    $products = $model->getProductListByQuery($query);
    include('views/home/list_item.php');
} else if (isset($_GET["search"])) {
    $search_product = $_GET["search"];
    // Cập nhật query cho tìm kiếm sản phẩm
    $query = "product_name LIKE '%" . $search_product . "%'";
    $products = $model->getProductListByQuery($query);
    include('views/home/list_item.php');
} else {
    $products = $model->getProductList();
    
    include('views/home/list_item.php');
}
?>