<?php
    require_once("models/cart_model.php");
    if(isset($_SESSION["user_id"])){
        $cart_model = new CartModel();

        $query="SELECT tbl_products.product_name, tbl_products.price, tbl_carts.quantity
                FROM tbl_carts INNER JOIN tbl_products ON tbl_carts.productID = tbl_products.productID 
                WHERE userID =".$_SESSION["user_id"]."";

        $carts = $cart_model->getCartList($query);
        include_once("views/cart/cart_view.php");
    }

?>


