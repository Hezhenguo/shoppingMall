require(['jquery'],function($){
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
});








