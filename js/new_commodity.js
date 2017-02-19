/**
 * Created by admin on 2017/3/29.
 */
require(['jquery'],function($){
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
});

