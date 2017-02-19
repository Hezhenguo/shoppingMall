<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/new_commodity.css">
    <link rel="stylesheet" href="css/login_sucess.css">
    <link rel="stylesheet" href="css/shopping.css">
</head>
<body>
<div id="header">
    <div class="header-wrap">
        <div id="header-left"><img src="img/header.png" alt=""></div>
        <div id="header-right">
            <div class="searchbar">
                <input type="text" class="search-input">
                <button class="search-btn">搜索</button>
                <!--                    <a href="">三星家电</a><a href="">海尔家电电</a>-->
            </div>

            <div class="uname_shundian">
                欢迎用户:<?php echo $uname;?>
            </div>
        </div>
    </div>
</div>
<div id="nav">
    <ul>
        <li><a href="welcome/sucess_index?username=<?php echo $uname;?>">首页</a></li>
        <li><a href="welcome/sucess_new_commodity?username=<?php echo $uname;?>">新品</a></li>
        <li><a href="welcome/sucess_appliance?category_id=1&username=<?php echo $uname;?>">家电</a></li>
        <li><a href="welcome/sucess_cooker?category_id=2&username=<?php echo $uname;?>">厨卫</a></li>
        <li><a href="welcome/sucess_phone?category_id=3&username=<?php echo $uname;?>">phone</a></li>
        <li><a href="welcome/sucess_computer?category_id=4&username=<?php echo $uname;?>">电脑</a></li>
    </ul>
</div>
<div class="wrap">
    <div class="product-side">
        <div class="product-wrap">
            <div class="product-small">
                <div class="product-drag"></div>
                <img src="<?php echo $informations->img;?>" alt="">
            </div>
            <div class="product-big">
                <img src="<?php echo $informations->img;?>" alt="" id="product-img">
            </div>
        </div>
        <ul class="imgList">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="product-main">
        <h2 class="product-introduce"><?php echo $informations->title;?></h2>
        <div class="product-price">价格￥：<?php echo $informations->price;?></div>
        <div class="amount">
                <span>数量：</span>
                <a href="javascript:;" class="btn-decrease">-</a>
                <input type="text" class="action-input" value="1" min="1">
                <a href="javascript:;" class="btn-increase">+</a>
        </div>
        <div class="btn-car">
            <a href="welcome/shopping_car?username=<?php echo $uname;?>&commodityId=<?php echo $informations->commodity_id;?>">加入购物车</a>
        </div>
    </div>
</div>
<!--<script src="js/jquery.js"></script>-->
<!--<script src="js/new_commodity.js"></script>-->
<!--<script src='js/require.js' data-main='js/new_commodity.js'></script>-->
<script src="js/require.js" data-main="js/shopping.js"></script>
</body>
</html>