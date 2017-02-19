/**
 * Created by admin on 2017/4/14.
 */
require(['jquery'],function($){
    $(function($){
    var $productSmall = $('.product-small');
    var $productDrag = $('.product-drag');
    var $productBig = $('.product-big');
    var $productImg = $('#product-img');
        $productSmall.hover(function(){
            $productDrag.show();
            $productBig.show();
        },function(){
            $productDrag.hide();
            $productBig.hide();
        }).on('mousemove',function(e){
            var iLef = event.pageX - $productSmall.offset().left - $productDrag.width()/2;
            var iTop = event.pageY - $productSmall.offset().top - $productDrag.height()/2;

            if (iLef > ( $productSmall.width() - $productDrag.width() )){
                iLef = $productSmall.width() - $productDrag.width();
            }
            if (iLef < 0){
                iLef = 0;
            }
            if (iTop > ( $productSmall.height()-$productDrag.height() ) ){
                iTop = $productSmall.height() - $productDrag.height();
            }
            if (iTop < 0){
                iTop = 0;
            }
            $productDrag.css({'left':iLef,'top':iTop});

            var fLeft = iLef/($productSmall.width()-$productDrag.width());
            var fTop = iTop/($productSmall.height()-$productDrag.height());

            $productImg.css({
                'left':-fLeft*($productImg.width()-$productBig.width()),
                'top':-fTop*($productImg.height()-$productBig.height())
            });

        });

    });

    $(function($){
        var $btnDecrease = $('.btn-decrease');
        var $btnIncrease = $('.btn-increase');
        var $actionInput = $('.action-input');
        //var index = $actionInput.val();

        $btnIncrease.on('click',function(){
            var Tindex = $actionInput.val();
                //var zIndex = ++Tindex;
                $actionInput.val(++Tindex);


        });
        $btnDecrease.on('click',function(){
            var Dindex = $actionInput.val();
            $actionInput.val(--Dindex);
            console.log(--Dindex);
        });

    });

    $(function($){
        var $btnCar = $(".btn-car");
        $btnCar.on('click',function(){
            $btnCar.css('background-color','gray');



        });
    })

});