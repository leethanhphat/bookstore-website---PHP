<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    
    <? session_start(); ?>
    <?php

    if(isset($_SESSION["user_id"])) {
        header("Location: index.php");
    }
    ?>
    <?php include_once("views/main/header.php") ?>
    <main class="container login-container">
        <div class="row">
            <div class="title col-12 text-center">
                <h2 class="uppercase ">Đăng nhập</h2>
            </div>
            <div class="col-12 col-lg-6">
                <form action="modules/login_module.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Tài khoản email" name="email"  required>
                        <label for="email">Tài khoản email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password" required>
                        <label for="password">Mật khẩu</label>
                    </div>

                    <button type="submit" class="btn btn-login-form col-12 btn-secondary my-3">Đăng nhập</button>
                    <a href="signup.php" id="signup-link"><button class="btn btn-login-form col-12 btn-outline-secondary">Tạo tài khoản</button></a>  
                </form>

            </div>
            
            <div class="col-12 col-lg-6 text-center">
                <!-- <img src="https://lh3.googleusercontent.com/fife/AK0iWDzM1mL-d9hFQzDgap8aj4UOFJQmwHmuf9IUUIgzxeFK4C3kFkCeArCfX4P5Z2JAUjBAW6NG4iOyuYrBzHtrUtggwvS0SZpHIVjssSb9n-Ohbmx-8dbft515ia2Xke9wIuEnRwzg5DfCloN7e2HBDUKspHenygmLwY1bxeNdqSLIhig9xUW6Yv2EtliwBgqBNcC1c3OzXcKe_N18T_1Ls7R2-9l8ivwFXeL0tSAbcfw7493VqFtHcAs9DGp_rKgvSOZfP8uo6I0ePO5oQ02mDxS_doSXpvaiiuf1jpIyArgl_DQoDVgZmvWJqxRjC64QPEZSTBcr8mi0P04Y5HWv2IqqSGgSS4MQGu7HJjhbDyhweGa3Z_Ix7zJW-JJ9RupUpcXwn9PX8OrITqbK5qnG1vlUWmEb2z0RtK6QP38o_qE5W02cnpxKD3m4k0sUyYXDudS65CDx6DJkpKEWfDkoqzP0ZmksyLMmarohrU-vggiiD7KmoTLaCvRKjc7T10krzRwi7d3d0U_wOQ1p6Y9zZ-niIiwRgio2Vsp-dGteCBjH1Vm1L9Fp-DSV819DL77-UMAo2EE9OyQ9mvNhJ8-jrcG7sUbAi8PY04aXa6CwOMK3Jx7_uYooNLc6CYFKWhHvGFdpTzda6ldF-1vlE4lYsSoassShSfnug6fgCHKUbv8UDC3Dk3NuxYRGRjQK_zTqRkWNQayv72_o-M8JzS0YkEgBA4RSYi00fd1vaDezmFgNm7MogZBes-0PavaP1bQkHegEb7JPsDRRzBJS4H4P3Lc3Xrzdi58Fm9TkAVQO0HVWe3wnklvSLEyCpL85a5XsRgsjqYKkUlbKwBjMGqsRcfoZ9Jm-NH0TOjPjicy5-JN4ZlEO2rzp37ijkgeLvvFhUD-DIdWfBaOBeZ5LglaTOHr61gTvHJesutIfCrlnla_SZ_5zPTyNZYb7OON57xMkSEcchQwDM-BLbtgyZO9T2JmNhoqqvABu1q8JfLa6XXZg97mSOmgi2IXJInNinQmKMTp_qZ3xezJePiTRnsBu00JRqPHjG6L-luS57phGpd1o_aHXAxWIPtAnRlSKdoDt1JDUOH0Q93zthIyzQbyj_seQzRVMxIgGb1azmesAkaZn--aaKV0pbFCF6uRrGXiaKgE9GVrpzpP1dlX1ECT1K-FoTI4PC6o6P8VAybnPMcszetturs9mIC9e4y482bWx25h-kD8re0KGQSJwBj3D8hcFPzSCUfE8aDQ-fKoc6-IiiEM-kbyU7ITkVydehm7P1MMVNVHgd1wY3ZYLy9ttfKtwot8MlBvbafEsYY8EdoKMzGlUIrE4YmwTTi3VAmBTxJGPC8NTrRcw-2QbXAv6nMbOVBFBkcMC67O5PI7MlIpMzL2a_yENd0ha8mTKiDJFV2dZnYervfQP67kDyeIB9L-pV4byG3J7mZiUZXYEkuse8Yji3R-PeQGemmlllVAtfbzBBJ54UTQ-SWAJ8GiZzQXEhz9POFX57IcfAZX4sLR5IaHqkj4AYi_kvgu7OyCX=w958-h852" class="rounded " width="300" height="300" alt="VoHoangTu Profile Image"> -->
            </div>
        </div>

    </main>
    <?php include_once("views/main/footer.php") ?>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
        const signupButton = document.getElementById('signup-link');

        // Ngăn chặn hành vi mặc định khi nhấn vào button "Tạo tài khoản"
        signupButton.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ a
            // Thực hiện các hành động khác ở đây nếu cần
            // Ví dụ: chuyển hướng đến trang tạo tài khoản bằng JavaScript
            window.location.href = 'signup.php'; // Đổi đường dẫn tới trang tạo tài khoản
        });
    });
    </script>
</body>

</html>