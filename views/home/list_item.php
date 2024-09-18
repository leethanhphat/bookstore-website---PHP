<div class="container">
    <div class="row">
        <?php
        foreach ($products as $product)
            echo '
            <div class="col-md-4">
            <div class="card mb-4  link ">
                <a href="index.php?productid=' . $product->getproductID() .
                '"><img title="' . $product->getProductName() . '" src="' . $product->getimage() . '" class="card-img-top product-thumnail" alt="Product Image"></a>
                <div class="card-body link">
                    <h5 class="card-title link" title="' . $product->getProductName() . '">' . $product->getProductName() . '</h5>
                    <p class="card-text link">' . $product->getPrice() . '₫</p>
                </div>
            </div>
        </div>
        ';

        ?>
    </div>
</div>