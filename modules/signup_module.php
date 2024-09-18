<?php
require_once("db_module.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = $_POST["username"];
    $password_input = $_POST["password"];
    $hashedPassword = password_hash($password_input, PASSWORD_DEFAULT);
    $Email = $_POST["email"];
    // Step 4: Check if the username already exists in the database
    $sql = "SELECT * FROM tbl_users WHERE Email = '$Email'";
    $link = null;
    taoKetNoi($link);
    $result = chayTruyVanTraVeDL($link, $sql);
    if ($result->num_rows > 0) {
        echo "Username already exists";
    } else {
        $sql = "INSERT INTO tbl_users (username, password, Email, is_admin) VALUES ('$username_input', '$hashedPassword', '$Email', '0')";
        if (chayTruyVanKhongTraVeDL($link, $sql) === TRUE) {
            header("Location: ../login.php");
        } else {
            echo "Error: ";
        }
    }
}
