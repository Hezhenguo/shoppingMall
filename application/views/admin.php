<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="user_title"><span>管理员已登录</span></div>
<div class="header">
    <ul class="manage">
        <li class="user_admin" dataId_admin="5"><a href="../welcome/admin">用户管理</a></li>
        <li class="commodity_admin" dataId_admin="6"><a href="../welcome/admin_commodity">商品管理</a></li>
    </ul>
    <div class="header_right">
        <button class="btn">添加</button>
        <a href="welcome/index" class="tuichu">退出</a>
    </div>
</div>
<div class="warp">
    <table>
        <thead class="title_list">
            <tr>
                <td>用户ID</td>
                <td>用户名</td>
                <td>用户密码</td>
                <td>操作</td>
            </tr>

            <?php
                foreach( $users as $user) {
                    ?>
                    <tr>
                        <td><?php echo $user->user_id?></td>
                        <td><?php echo $user->user_name?></td>
                        <td><?php echo $user->password?></td>
                        <td class="shanchu"><a href="../welcome/admin_shanchu?userId=<?php echo $user->user_id?>">删除</a></td>
                    </tr>
                    <?php
                }
            ?>

<!--            <tr>-->
<!--                <td>1</td>-->
<!--                <td>2</td>-->
<!--                <td>3</td>-->
<!--                <td class="shanchu">删除</td>-->
<!--            </tr>-->
        </thead>
    </table>
</div>
<!--<script src="../js/require.js" data-main="../js/admin.js"></script>-->
<script src="../js/jquery.js"></script>
<script src='../js/layer-v3.0.3/layer/layer.js'></script>
<script src="../js/admin.js"></script>
</body>
</html>