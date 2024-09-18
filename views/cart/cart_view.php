<?php
$_SESSION["sum_total"] = 0;
$i = 1;
foreach ($carts as $cart) {
    echo '<tr>
                <td>' . $i . '</td>
                <td >' . $cart->getProductName() . '</td>
                <td>' . $cart->getPrice() . '</td>
                <td>' . $cart->getQuantity() . '</td>
                <td>' . $cart->getTotal() . '</td>
            </tr>';
    $i++;
    $_SESSION["sum_total"] += $cart->getTotal();
}
