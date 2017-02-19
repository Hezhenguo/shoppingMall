<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="header">
        <div class="header-wrap">
            <img src="img/header.png" alt="">
        </div>
    </div>
    <div id="container">
        <div id="formal_login">
            <h2>用户登录</h2>
            <form action="welcome/validation_user" class="formal_user" method="post">
                <input type="text" class="x_inpute" name="username" id="username" placeholder="请输入用户名">
                <input type="password" class="x_inpute" name="password" id="password" placeholder="请输入密码">
                <input class="login_btn" type="submit" id="login_send" username="submit" value="登录">
            </form>
        </div>
    </div>
welcome to php!!!!!!!
登录登录
<!--<script src="js/require.js" data-main="js/login_detail.js"></script>-->
</body>
</html>