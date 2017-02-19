<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login_sucess.css">
    <link rel="stylesheet" href="css/new_commodity.css">
    <link rel="stylesheet" href="css/appliance.css">
    <link rel="stylesheet" href="css/cooker.css">
    <link rel="stylesheet" href="css/phone.css">
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
<div class="subject"></div>
<div class="wrap">
    <div class="first_title"><span>手机分类</span></div>
    <div class="show">
        <ul class="index">
            <li>01</li>
            <li>02</li>
            <li>03</li>
            <li>04</li>
        </ul>
        <ul class="show_content">
            <li><a href="#"><img src="img/phone/phone_02.jpg" alt=""></a></li>
            <li><a href="#"><img src="img/phone/phone_03.jpg" alt=""></a></li>
            <li><a href="#"><img src="img/phone/phone_04.jpg" alt=""></a></li>
            <li><a href="#"><img src="img/phone/phone_05.jpg" alt=""></a></li>
        </ul>
    </div>
    <div class="appliance_style">
        <a href="">
            <img src="img/phone/phone_01.jpg" alt="">
        </a>
    </div>

    <div class="cooker_list"><span>手机列表</span></div>

    <div class="new_list">
        <ul>
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：888.8</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->
            <!--                                                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:卡地亚</p><img src="img/air1.jpg" alt=""><p class="date">2017-01-01</p><sapn class="price">价格￥：</sapn></a></li>-->


            <?php
            foreach($phones as $phone){
                ?>
                <li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:<?php echo $phone->title?></p><img src="<?php echo $phone->img?>" alt=""><p class="date"><?php echo $phone->post_date?></p><sapn class="price">价格￥：<?php echo $phone->price?></sapn></a></li>
                <?php
            }
            ?>

        </ul>
    </div>
</div>

<!--<script src="js/jquery.js"></script>-->
<!--<script src="js/appliance.js"></script>-->
<script src='js/require.js' data-main='js/appliance.js'></script>
</body>
</html>