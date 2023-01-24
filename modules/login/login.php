<?php



if (isset($_POST['btn_submit']) and ($_POST['btn_submit'])) {
    // B1. đặt cờ hiệu
    $error = array();

    // B2. hạ cờ
    if (empty($_POST['username'])) {
        $error['username'] = "vui lòng nhập username";
    } else {
        $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($pattern, $_POST['username'], $matches)) {
            $error['username'] = "username không đúng!";
        } else {
            $username = $_POST['username'];
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "vui lòng nhập mật khẩu";
    } else {
        $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if (!preg_match($pattern, $_POST['password'], $matches)) {
            $error['password'] = "mật khẩu không đúng!";
        } else {
            $password = $_POST['password'];
        }
    }

    // B3. kiểm tra tình trạng
    if (empty($error)) {
        // nếu ko có lỗi ta dùng hàm check_login ở trang lib/user.php
        // để kt tk có khớp với tk trong list_user ở data/user hay ko?
        if (check_login($username, $password)) {
            // echo "login thanh cong";
            // thiết lập phiên đăng nhập
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            // chuyển hướng vào bên trong
            redirect("?page=home");
        } else {
            $error['account'] = "account ko ton tai";
        }
        // echo "login thanh cong";
        // redirect("?page=home");
    }

    // checkbox remember me
    // tạo ra cookie chỉ khi user checkbox
    // mục đích giúp user ko cần login lại nếu như thoát trình duyệt và mở lại
    // nhưng cookie chỉ có tác dụng khi mà user chưa logout
    if ((isset($_POST['remember'])) && (isset($_SESSION['login']))) {
        $_COOKIE['login'] = setcookie('user', $username, time() + 21150);
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Trang login</title>
</head>

<body>
    <style>
        .error {
            color: red;
        }
    </style>
    <div id="wrapper">
        <h1>Login</h1>
        <form action="" method="post" id="form-login">
            <input type="text" id="username" name="username" placeholder="username" value="<?php if (!empty($username)) echo $username ?>">
            <?php
            if (!empty($error['username'])) { ?>
                <p class="error"><?php echo $error['username'] ?></p>
            <?php }
            ?>


            <input type="password" id="password" name="password" placeholder="password">
            <?php
            if (!empty($error['password'])) { ?>
                <p class="error"><?php echo $error['password'] ?></p>
            <?php }
            ?>

            <?php
            if (!empty($error['account'])) { ?>
                <p class="error"><?php echo $error['account'] ?></p>
            <?php }
            ?>

            <label for="remember"><input type="checkbox" id="remember" name="remember"> Remember me</label>


            <input type="submit" id="btn-login" name="btn_submit" value="Đăng nhập">
        </form>
        <a href="" id="lost-pass">Quên mật khẩu</a>
    </div>
</body>

</html>