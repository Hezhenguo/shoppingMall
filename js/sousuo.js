/**
 * Created by admin on 2017/5/12.
 */
require(['jquery'],function($){
    var $searchBtn = $('.search-btn');
    var $searchInput = $('.search-input');
    $searchBtn.on('click',function(){
        var $container = $('#container');
        var $wrap = $('.wrap');
        var $footer = $('.footer');
        var $list1 = $('.list1');
        $container.remove();
        $footer.remove();
        $list1.empty();
        $.get('welcome/sousuo',{
            'sousuoVal':$searchInput.val()
        },function(data){
        //console.log(JSON.parse(data))//转换数据类型
        //    console.log(data);
            if(data){
                var html='';
                for(var i=0;i<data.length;i++){
                    var $commodity=data[i];
                    html+=' <li class="items"><a href="welcome/passport_login"><img src='+$commodity.img+' alt=""><p>'+$commodity.title+'</p><span class="titles">价钱:￥'+$commodity.price+'</span></a></li>';
                }
                $list1.append(html);

            }else{
                alert("对不起，查找失败！！！！");
            }
        },'json');

    });


});