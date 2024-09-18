<header id="header" class="sticky-top ">
    <link rel="stylesheet" href="public/css/main.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-header">
        <div class="container">
            <a class="navbar-brand uppercase" href="index.php">FOUR STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="input-group search-input-main d-flex w-50 px-3 py-1">
                    <input type="text" class="form-control " id="search-input" placeholder="Tìm kiếm......" aria-describedby="btn-addon">
                    <button onclick="searchProducts()" class="btn btn-light" type="button" id="btn-addon"> <i class="bi bi-search"></i></button>
                </div>

                <script type="javascript" scr="public\js\search.js"></script>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link uppercase" href="index.php">Sản phẩm</a>
                    </li>
                    <li class="devide-header border-start "></li>
                    <li class="nav-item">
                        <a class="nav-link uppercase" href="cart.php">Giỏ hàng</a>
                    </li>
                    <li class="devide-header border-start "></li>
                    <li class="nav-item">
                        <a class="nav-link uppercase" href="login.php">Đăng nhập</a>
                </ul>
            </div>
        </div>
    </nav>
</header>