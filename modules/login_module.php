
    <?php
    include_once("db_module.php");
    session_start();
    // Bước 3: Tạo tệp login.php để xử lý quá trình đăng nhập

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Bước 4: Xác thực thông tin đăng nhập của người dùng
        $sql = "SELECT * FROM tbl_users WHERE Email = '$email'";
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, $sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashPass=$row["password"];
            if (password_verify($password,  $hashPass)) {
                $_SESSION["user_id"] = $row["userID"];
                $_SESSION["user_name"] =$row["username"];
                $_SESSION["is_admin"] = $row["is_admin"];
                if ($row["is_admin"] == "1") {
                    echo  "Đăng nhập thành công";
                    header("Location: ../admin.php");
                } else {
                    echo  "Đăng nhập thành công";
                    header("Location: ../index.php");
                }
            }else {
                // echo  "Đăng nhập không thành công";
                echo "<script>alert('Đăng nhập không thành công');</script>";
            }
        } else {
            
        }
    }
    ?>
