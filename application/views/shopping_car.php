<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>结算</title>
    <link rel="stylesheet" href="../css/shopping_car.css">
</head>
<body>
<div class="header">
    <div class="inner_wrap">
        <div class="sty_title"><p>购物车结算</p></div>
        <button class="fanhui"><a href="welcome/index">退出</a></button>
    </div>
</div>
<div class="wrap">
    <table>
        <thead>
            <tr class="title_list">
                <th style="width: 400px">商品名称</th>
                <th>单价</th>
                <th>数量</th>
                <th>小计</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody class="cart-item">
            <tr class="car_product">
                <td><div><?php echo $informations->title;?></div></td>
                <td>￥:<span class="shopping_price"><?php echo $informations->price ;?></span></td>
                <td><div class="amount">
                        <a href="javascript:;" class="btn-decrease">-</a>
                        <input type="text" class="action-input" value="1" min="1">
                        <a href="javascript:;" class="btn-increase">+</a>
                    </div>
                </td>
                <td>￥:<span class="samll_total">500</span></td>
                <td><a href="javascript:;" class="button_delete">删除</a></td>
            </tr>
        </tbody>
    </table>
</div>
<script src="../js/require.js" data-main="../js/shopping_car.js"></script>
</body>
</html>