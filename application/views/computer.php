<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/new_commodity.css">
    <link rel="stylesheet" href="css/appliance.css">
    <link rel="stylesheet" href="css/cooker.css">
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="css/computer.css">
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
        <img src="img/lunfan/lunfantu_01.jpg" alt="">
        <img src="img/lunfan/lunfantu_02.jpg" alt="">
        <img src="img/lunfan/lunfantu_03.jpg" alt="">
        <img src="img/lunfan/lunfantu_04.jpg" alt="">
    </div>
    <div id="arrow">
        <span class="left">&lt;</span>
        <span class="right">&gt;</span>
    </div>
</div>
<div class="wrap">
    <div class="first_title"><span>电脑分类</span></div>
    <div class="show">
        <ul class="index">
            <li>01</li>
            <li>02</li>
            <li>03</li>
            <li>04</li>
        </ul>
        <ul class="show_content">
            <li><a href="#"><img src="img/computer/computer_01.jpg" alt=""></a></li>
            <li><a href="#"><img src="img/computer/computer_02.jpg" alt=""></a></li>
            <li><a href="#"><img src="img/computer/computer_03.jpg" alt=""></a></li>
            <li><a href="#"><img src="img/computer/computer_04.jpg" alt=""></a></li>
        </ul>
    </div>
    <div class="appliance_style">
        <a href="">
            <img src="img/computer/computer_05.jpg" alt="">
        </a>
    </div>

    <div class="cooker_list"><span>电脑列表</span></div>

        <div class="classes_div">
            <a href="javascript:;" class="subjectent" data-id="1">综合 <i class="icon-arrow-down"></i></a>
            <a href="javascript:;" data-id="2">价格 <i class="icon-arrow-down"></i></a>
            <a href="javascript:;" data-id="3">最新 <i class="icon-arrow-down"></i></a>
            <a href="javascript:;" data-id="4">热卖 <i class="icon-arrow-down"></i></a>
        </div>
    <div class="new_list">
        <ul class="star_list">
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：888.8</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
<!--                                                            <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->

            <?php
                foreach($computers as $computer){
            ?>
                    <li><a href="welcome/passport_login"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:<?php echo $computer->title?></p><img src="<?php echo $computer->img?>" alt=""><p class="date"><?php echo $computer->post_date?></p><sapn class="price">价格￥：<?php echo $computer->price?></sapn></a></li>
            <?php
                }
            ?>

        </ul>
    </div>
</div>
<script src='js/require.js' data-main='js/computer.js'></script>
</body>
</html>