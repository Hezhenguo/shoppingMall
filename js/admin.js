$(function(){

        $('.btn').on('click', function(){
            layer.open({
                type: 1,
                area: ['600px', '400px'],
                shadeClose: true, //点击遮罩关闭
                content: '<form action="../welcome/admin_add" class="user_tianjia" method="get">'+'<span class="biaodan">用户名：<input type="text" id="username" name="username"></span>'
                +'<span class="biaodan">密&nbsp码：<input type="text" id="password" name="password"></span>'
                +'<span class="radiox"><input type="radio" name="sex" value="男" checked="false">男'+'<input type="radio" name="sex" value="女">女'
                +'</span>'+'<input type="submit" id="submit1" value="添加">'+'</form>'

            });



        });



    });

