<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/admin_commodity.css">
</head>
<body>
<div class="user_title"><span>管理员已登录</span></div>
<div class="header">
    <ul class="manage">
        <li class="user_admin" dataId_admin="5"><a href="../welcome/admin">用户管理</a></li>
        <li class="commodity_admin" dataId_admin="6"><a href="">商品管理</a></li>
    </ul>
    <div class="header_right">
        <button class="btn">添加</button>
    </div>
</div>
<div class="warp">
    <table>
        <thead class="title_list">
        <tr>
            <td>商品ID</td>
            <td>商品名称</td>
            <td>商品价格</td>
            <td>商品热度</td>
            <td>商品日期</td>
            <td>操作</td>
        </tr>

        <?php
        foreach( $commoditys as $commodity) {
            ?>
            <tr>
                <td><?php echo $commodity->commodity_id?></td>
                <td><?php echo $commodity->title?></td>
                <td><?php echo $commodity->price?></td>
                <td><?php echo $commodity->click?></td>
                <td><?php echo $commodity->post_date?></td>
                <td class="shanchu"><a href="../welcome/commodity_shanchu?commodityId=<?php echo $commodity->commodity_id?>">删除</a></td>
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
<script src="../js/jquery.js"></script>
<script src='../js/layer-v3.0.3/layer/layer.js'></script>
<script src="../js/admin_commodity.js"></script>
</body>
</html>