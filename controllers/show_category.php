<?php
    require_once("models/category_model.php");
    $cate_model = new CategoryModel();
    $categories = $cate_model->getCategoryList();
    include_once("views/home/list_category.php")
?>


