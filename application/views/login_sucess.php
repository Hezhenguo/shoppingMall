<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆成功</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login_sucess.css">
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
        <li><a href="welcome/welcome/sucess_phone?category_id=3&username=<?php echo $uname;?>">phone</a></li>
        <li><a href="welcome/sucess_computer?category_id=4&username=<?php echo $uname;?>">电脑</a></li>
    </ul>
</div>
<div id="container"></div>
<div class="wrap">
    <ul class="list1">
        <?php
        foreach($commoditys as $commodity ) {
            ?>
            <li class="items"><a href="welcome/shopping?username=<?php echo $uname;?>&commodityId=<?php echo $commodity->commodity_id?>"><img src="<?php echo $commodity->img?>" alt=""><p><?php echo $commodity->title;?></p><span class="titles">价钱:￥<?php echo $commodity->price;?></span></a></li>
            <?php
        }
        ?>
        <!--            <li class="items"><a href="#"><img src="img/hometv1.jpg" alt=""><p>海信</p><span class="titles">价钱:￥18888</span></a></li>-->
        <!--            <li class="items"><a href="#"><img src="img/" alt=""><p>海蓝之家</p><span class="titles">价钱:￥18888</span></a></li>-->
        <!--            <li class="items"><a href="#"><img src="img/" alt=""><p>纽崔莱</p><span class="titles">价钱:￥18888</span></a></li>-->
        <!--            <li class="items" style="margin-right: 0px"><a href="#"><img src="img/" alt=""><p>纽崔莱</p><span class="titles">价钱:￥18888</span></a></li>-->
        <!---->
    </ul>
</div>
<span></span>
<div class="footer">
    <div class="last-footer">
        <p class="information">ComputerStudent 2017-03-13 黑龙江省哈尔滨市黑龙江大学604版权所有 粤ICP备13052236号</p>
        <p class="information">本人的联系电话;15754607638</p>
        <p class="information">本人的微信;zhenguo1105</p>
        <ul class="footer-im">
            <li class="footer-img"><img src="img/gongshang.png" alt=""><p>工商网监</p></li>
            <li class="footer-img"><img src="img/xinlangweibo.png" alt=""><p>新浪微博</p></li>
            <li class="footer-img"><img src="img/weixin_footer.png" alt=""><p>微信</p></li>
        </ul>
    </div>
</div>
</body>
</html>