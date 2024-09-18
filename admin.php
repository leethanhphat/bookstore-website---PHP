<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>
    <script src="public/js/admin.js"></script>
</head>

<body id="admin-body">
    <?php include_once("views/main/header.php"); ?>
    <?php
    if (($_SESSION['is_admin']) != 1)
        header("Location: index.php");
    ?>

    <div class="container admin-container mt-5">
        <main class="row main-admin">
            <div class="menu col-lg-4 col-12 mb-3">
                <div class="btn-group-vertical w-100" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                    <label class="btn btn-outline-secondary uppercase" for="option1">Account</label>

                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-outline-secondary uppercase" for="option2">Product</label>

                    <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                    <label class="btn btn-outline-secondary uppercase" for="option3">Category</label>

                    <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                    <label class="btn btn-outline-secondary uppercase" for="option4">Add Product</label>

                    <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                    <label class="btn btn-outline-secondary uppercase" for="option5">Add Category</label>
                </div>

            </div>
            <div class="content col-lg-8 col-12" id="content">
                <?php include("controllers/admin_controller.php"); ?>
            </div>
        </main>

    </div>



</body>

</html>