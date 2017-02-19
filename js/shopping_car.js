require(['jquery'],function($){
    $(function($){
        var $btnDecrease = $('.btn-decrease');
        var $btnIncrease = $('.btn-increase');
        var $actionInput = $('.action-input');
        var $samlTotal = $('.samll_total');
        var $shoppingPrice = $('.shopping_price');
        var $buttonDelete = $('.button_delete');
        var $carProduct = $('.car_product');
        //var index = $actionInput.val();
        $samlTotal.html($shoppingPrice.html()*$actionInput.val());
        $btnIncrease.on('click',function(){
            var Tindex = $actionInput.val();
            //var zIndex = ++Tindex;
            $actionInput.val(++Tindex);
            $samlTotal.html($shoppingPrice.html()*$actionInput.val());

        });
        $btnDecrease.on('click',function(){
            var Dindex = $actionInput.val();

            $actionInput.val(--Dindex);
            $samlTotal.html($shoppingPrice.html()*$actionInput.val());


            //console.log(--Dindex);
        });

        $buttonDelete.on('click',function(){
            $carProduct.html(" ");
        });


    });
});