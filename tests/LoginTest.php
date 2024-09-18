<?php
use PHPUnit\Framework\TestCase;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class LoginTest extends TestCase
{
    protected function setUp(): void
    {
        // Setup code here, if needed
    }

    public function testLoginWithValidCredentials()
    {
        // Giả lập POST request
        $_SERVER["REQUEST_METHOD"] = "POST";
        $_POST["email"] = "smile@gmail.com";
        $_POST["password"] = "smile"; // Đảm bảo mật khẩu này khớp với cái bạn đã hash trong cơ sở dữ liệu

        ob_start();
        include 'modules/login_module.php';
        $output = ob_get_clean();

        // Xác minh kết quả đầu ra
        $this->assertStringContainsString("Đăng nhập thành công", $output);
    }

    public function testLoginWithInvalidCredentials()
    {
        $_SERVER["REQUEST_METHOD"] = "POST";
        $_POST["email"] = "invalid@example.com";
        $_POST["password"] = "wrongpassword";

        ob_start();
        include 'modules/login_module.php';
        $output = ob_get_clean();

        // Xác minh kết quả đầu ra
        $this->assertStringContainsString("Đăng nhập không thành công", $output);
    }
}
