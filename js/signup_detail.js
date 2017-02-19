$(function(){
    var $username = $("#username");
    $username.on('blur',function(){
        $.get('welcome/check_username', {
            'username': $username.val()
        },function(res){
            //console.log(res);
            var $signup_send = $("#signup_send");
            var $remind = $(".remind");
            if(res == 'success'){
                $signup_send.attr('disabled','true');
                $remind.css("display",'block');
            }else if(res == 'fail'){
                $signup_send.removeAttr('disabled');
                $remind.css("display",'none');
            }
        },"text");
    });

});