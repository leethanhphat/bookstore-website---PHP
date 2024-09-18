<table class="table">
    <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category ID</th>
            <th scope="col">Price</th>
            <th scope="col">Stock Quantity</th>
            <th scope="col">Product Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($products as $product) {
            echo '<tr>
                        <th scope="row">' . $product->getProductID() . '</th>
                        <td>' . $product->getProductName() . '</td>
                        <td>' . $product->getCategoryID() . '</td>
                        <td>' . $product->getPrice() . '</td>
                        <td>' . $product->getStockQuantity() . '</td>
                        <td style="height:50px"><img src="' . $product->getimage() . '" class="img-thumbnail" style="width:150px"alt="Product Image"></td>
                    </tr>';
        }
        ?>
    </tbody>
</table>