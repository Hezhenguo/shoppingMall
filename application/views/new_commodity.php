<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>最新商品</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/new_commodity.css">
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

            <div class="bnner">
                <a href="welcome/passport_signup?loginm=1" class="zc_store" onclick="return true">注册</a>
                <a href="welcome/passport_login?loginm=1" class="dl_store" onclick="return true">登录</a>
            </div>

        </div>
    </div>
</div>
<div id="nav">
    <ul>
        <li><a href="#">首页</a></li>
        <li><a href="welcome/new_commodity">新品</a></li>
        <li><a href="welcome/appliance?category_id=1">家电</a></li>
        <li><a href="welcome/cooker?category_id=2">厨卫</a></li>
        <li><a href="welcome/phone?category_id=3">phone</a></li>
        <li><a href="welcome/computer?category_id=4">电脑</a></li>
    </ul>
</div>
<div class="content_lunfan">
    <ul class="tab">
        <li class="select">01</li>
        <li>02</li>
        <li>03</li>
        <li>04</li>
    </ul>
    <div class="content_list">
        <img src="img/lunfan/lunfantu1.jpg" alt="">
        <img src="img/lunfan/lunfantu2.jpg" alt="">
        <img src="img/lunfan/lunfantu3.jpg" alt="">
        <img src="img/lunfan/lunfantu4.jpg" alt="">
    </div>
    <div id="arrow">
        <span class="left">&lt;</span>
        <span class="right">&gt;</span>
    </div>
</div>
<div class="wrap">
    <div class="new_title"><span>最新上架</span></div>
    <div class="small_title">
        <img src="img/lunfan/lunfantu5.jpg" alt="" class="left_img">
        <img src="img/lunfan/lunfantu6.jpg" alt="" class="right_img">
    </div>
    <div class="new_list">
        <ul>
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：888.8</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <?php
                foreach($newCommoditys as $newCommodity) {
            ?>
                    <li><a href="welcome/passport_login"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:<?php echo $newCommodity->title?></p><img src="<?php echo $newCommodity->img?>" alt=""><p class="date"><?php echo $newCommodity->post_date?></p><sapn class="price">价格￥：<?php echo $newCommodity->price?></sapn></a></li>
             <?php
                }
            ?>
        </ul>
    </div>
</div>
<!--<script src="js/jquery.js"></script>-->
<!--<script src="js/new_commodity.js"></script>-->
<script src='js/require.js' data-main='js/new_commodity.js'></script>
</body>
</html>