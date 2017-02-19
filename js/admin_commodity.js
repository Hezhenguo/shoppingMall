$(function($){
    $('.btn').on('click', function(){
        layer.open({
            type: 1,
            area: ['600px', '360px'],
            shadeClose: true, //点击遮罩关闭
            content: '<form action="../welcome/add_commodity" class="commodity_title" method="get">'+'<span>商品名:&nbsp;&nbsp;<input type="text" name="title" class="commodity_name"></span>'+
                '<span>商品价格:&nbsp;<input type="text" name="price" class="commodity_price"></span>'+'<span>商品日期:&nbsp;<input type="text" name="post-data" class="commodity_timer"></span>'
                +'<span>商品图片:&nbsp;<input type="file" name="imgs" class="add_commodity"></span>'+
                '<input type="submit" id="submit1" value="提交">'+'</form>'
        });
    });
});
