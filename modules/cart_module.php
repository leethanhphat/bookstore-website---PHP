<?php
require_once("db_module.php");
session_start();

if(isset($_SESSION["user_id"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userID = $_SESSION["user_id"];
        $productID = $_POST["productID"];
        
        $quantity = $_POST["quantity"];
        $link = null;
        taoKetNoi($link);
        $select="SELECT * FROM tbl_carts WHERE userID = ".$userID." and productID = ".$productID."";
        $result = chayTruyVanTraVeDL($link,$select);
        if ($result->num_rows > 0){
            $sql = "UPDATE tbl_carts SET quantity=quantity+".$quantity." WHERE userID = ".$userID." and productID = ".$productID."";

        }else{
            $sql = "INSERT INTO tbl_carts (userID,productID, quantity) VALUES ('$userID','$productID', '$quantity')";
        }
    

    
        if (chayTruyVanKhongTraVeDL($link, $sql) === TRUE) {

        } else {
            echo "Error: ";
        }
    }
}else{
    echo "Hãy đăng nhập để thêm sản phẩm vào giỏ";
}

?>