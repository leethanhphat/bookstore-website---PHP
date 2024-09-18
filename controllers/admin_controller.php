<?php
require_once("models/product_model.php");
require_once("models/category_model.php");
require_once("models/user_model.php");
if (isset($_GET['options'])) {
    switch ($_GET['options']) {
        case 'option1':
            // Account
            $user_model = new UserModel();
            $users = $user_model->getUserList();
            include("views/admin/admin_account.php");
            break;
        case 'option2':
            // Product
            $product_model = new ProductModel();
            $products = $product_model->getProductList();
            include("views/admin/admin_product.php");
            break;
        case 'option3':
            // Category
            $cate_model = new CategoryModel();
            $categories = $cate_model->getCategoryList();
            include("views/admin/admin_category.php");
            break;
        case 'option4':
            // Add Product
            $cate_model = new CategoryModel();
            $categories = $cate_model->getCategoryList();
            include("views/admin/add_product.php");
            break;
        case 'option5':
            // Add Category
            include("views/admin/add_category.php");
            break;
        default:
            // Xử lý mặc định nếu không có tùy chọn nào được chọn
            include("views/admin/default.php");
            break;
    }
} else {
    include("views\admin\default.php");
}
