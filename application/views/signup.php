<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div id="header">
    <div class="header-wrap">
        <img src="img/header.png" alt="">
    </div>
</div>
<div id="container">
    <div id="formal_login">
        <h2>用户注册</h2>
        <form action="welcome/user_signup" class="formal_user" method="post">
            <input type="text" class="x_inpute" name="username" id="username" placeholder="请输入用户名">
            <div class="waring"><span class="remind"><p>用户名已存在，重新填写!</p></span></div>
            <input type="password" class="x_inpute" name="password" id="password" placeholder="请输入密码">
            <span class="remind"><p>密码不正确！</p></span>
            <span class="box_radio">
                <input type="radio" value="男" class="chbox" checked="false" name="sex" >男
                <input type="radio" value="女" class="chbox" name="sex">女
            </span>
            <input class="signup_btn" type="submit" id="signup_send" value="注册">
        </form>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/signup_detail.js"></script>

<!--<script src="js/require.js" data-main="js/signup_detail"></script>-->
welcome to php!!!!!!!
登录登录
</body>
</html>