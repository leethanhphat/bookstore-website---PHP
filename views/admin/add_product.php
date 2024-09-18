
<form action="modules/add_product_module.php" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="productname-input ">Product Name</span>
        <input type="text" class="form-control" name = "productname-input"id="productname-input" aria-label="productname-input" aria-describedby="productname-input" required>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="category-input">Category</label>
        <select class="form-select uppercase" name = "category-input" id="category-input" required>
            <?php
            foreach ($categories as $category) {
                echo '<option value="' . $category->getCategoryId() . '">' . $category->getCategoryName() . '</option>';
            }
            ?>  
        </select>

    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="price-input">Price</span>
        <input type="text" class="form-control" name = "price-input" id="price-input" aria-label="Sizing example input" aria-describedby="price-input" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="quantity-input">Quantity</span>
        <input type="text" class="form-control" name = "quantity-input" id="quantity-input" aria-label="Sizing example input" aria-describedby="quantity-input" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="img-input">Image</span>
        <input type="url" class="form-control" name = "img-input" id="img-input" aria-label="Sizing example input" aria-describedby="img-input" required>
    </div>
    <button type="submit" class="btn btn-secondary">Thêm sản phẩm mới</button>
</form>