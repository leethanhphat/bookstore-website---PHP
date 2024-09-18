<?php
include_once("models/cart.php");
require_once("modules/db_module.php");

class CartModel
{
    public function getCartList($query)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, $query);
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $cart = new Cart(
                $rows["product_name"],
                $rows["price"],
                $rows["quantity"],
            );
            array_push($data, $cart);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}

?>