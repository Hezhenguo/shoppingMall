/**
 * Created by admin on 2017/4/6.
 */

require(['jquery'],function(){
    $(function($){
        var $aLi = $('ul.tab > li');
        var $aImg = $('div.content_list > img');
        var $Left = $('#arrow > .left');
        var $Right = $('#arrow > .right');
        var $content = $('.content_lunfan');
        var zIndex=4;//控制层级关系；
        for(var i=0; i < $aImg.length;i++){
            $aImg[i].style.zIndex = $aImg.length-i;
        }
        $aLi.on('click',function(){
            var this_index=$aLi.index(this);
            zIndex++;

            $aLi.removeClass('select');
            $aLi.eq(this_index).addClass('select');

            $aImg.eq(this_index).css('opacity','0');
            $aImg.eq(this_index).css('z-index',zIndex);
            $aImg.eq(this_index).animate({opacity:1},1000);
        });
        $Right.on('click',function(){
            var this_index = $('.select').index();//获取li元素中csss样式是.select的元素。
            this_index ++;
            zIndex ++;
            //if(this_index==$aLi.length){
            //	this_index=0;
            //}
            //
            //$aLi.removeClass('select');
            //$aLi.eq(this_index).addClass('select');
            //
            //$aImg.eq(this_index).css('opacity','0');
            //$aImg.eq(this_index).css('z-index',zIndex);
            //$aImg.eq(this_index).animate({opacity:1},1000);
            fn();

        });
        $Left.on('click',function(){
            var this_index = $('.select').index();//获取li元素中csss样式是.select的元素。
            this_index--;
            zIndex++;
            if(this_index<0){
                this_index=$aLi.length-1;
            }

            $aLi.removeClass('select');
            $aLi.eq(this_index).addClass('select');

            $aImg.eq(this_index).css('opacity','0');
            $aImg.eq(this_index).css('z-index',zIndex);
            $aImg.eq(this_index).animate({opacity:1},1000);

        });
        function fn(){
            var this_index = $('.select').index();//获取li元素中csss样式是.select的元素。
            this_index++;
            zIndex++;
            if(this_index==$aLi.length){
                this_index=0;
            }

            $aLi.removeClass('select');
            $aLi.eq(this_index).addClass('select');

            $aImg.eq(this_index).css('opacity','0');
            $aImg.eq(this_index).css('z-index',zIndex);
            $aImg.eq(this_index).animate({opacity:1},1000);

        }
        var timer;
        function run(){
            timer = setInterval(function(){
                fn();
            },1500);
        }
        run();
        $content.mouseover(function(){
            clearInterval(timer);
        });
        $content.mouseout(function(){
            run();
        });

    });

    $(function($){
        var $aLi=$('.index > li');
        var $showContent=$('.show_content');
        var $show = $('.show');
        var index = 0;
        $aLi.on('click',function(){
            var this_index=$aLi.index(this);
            $showContent.animate({left:-this_index*370+'px'},'slow');
        });
        function run(){
            index++;
            if(index == $aLi.length){
                index=0;
            }
            $showContent.animate({left:-index*370+'px'},'slow')
        }
        var timer
        function fn(){
            timer=setInterval(function(){
                run();
            },1500);
        }

        fn();
        $show.mouseover(function(){
            clearInterval(timer);
        });
        $show.mouseout(function(){
            fn();
        });
    });

    $(function($){
        $.getUrlParam = function(name)
        {
            var reg = new RegExp("(^|&)"+name +"=([^&]*)(&|$)");
            var r= window.location.search.substr(1).match(reg);
            if (r!=null) return unescape(r[2]); return null;
        }
        var categoryId =  $.getUrlParam('category_id');//获取url地址栏信息；
        $('.classes_div a').on('click',function(){
            $(this).siblings().removeClass('subjectent');
            $(this).addClass('subjectent');
            var cateId = $(this).data('id');

           var $commodityList= $('.star_list');
            $.get('welcome/get_computer',{
                cateId:cateId,
                categoryId:categoryId
            },function(data){
                $commodityList.empty();
                var html='';
                for(var i=0;i<data.length;i++){
                    var commodity=data[i];

                    html+='<li><a href="#"><div class="new_commodity"><span>欢迎选购本商品</span></div><p>介绍:'+commodity.title+'</p><img src="'+commodity.img+'" alt=""><p class="date">'+commodity.post_date+'</p><sapn class="price">价格￥：'+commodity.price+'</sapn></a></li>';


                }
                $commodityList.append(html);

            },'json');

    //console.log(categoryId);



        });
    });
});


