<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin2.0</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="{{url('asset/favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{url('/css/font.css')}}">
    <link rel="stylesheet" href="{{url('css/xadmin.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{url('js/xadmin.js')}}"></script>
</head>
<body class="login-bg">

<div class="login">
    <div class="message">站群后台管理登录</div>
    <div id="darkbannerwrap"></div>

    <form class="layui-form" method="post" action="/admin/dologin">
        <input name="name" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
        <hr class="hr20" >
    </form>
</div>

<script>

    $(function  () {
        layui.use('form', function(){
            var form = layui.form;
            // layer.msg('玩命卖萌中', function(){
            //   //关闭后的操作
            //   });
            //监听提交
            form.on('submit(login)', function(data){

                $.ajax({
                    //提交数据的类型 POST GET
                    type:"post",
                    //提交的网址
                    url:"/admin/dologin",
                    //提交的数据
                    data:$data,
                    //返回数据的格式
                    datatype: "json",//"xml", "html", "script", "json", "jsonp", "text".
                    //在请求之前调用的函数
                    beforeSend:function(){
                        layer.msg('正在登陆');
                        },
                    //成功返回之后调用的函数
                    success:function(data){
                        if (data.status=200){
                            layer.msg('登陆成功',function(){
                                location.href='/admin/home'
                            });
                        }else{
                            layer.msg('账户密码不正确');
                        }
                    },
                    //调用执行后调用的函数
                    complete: function(XMLHttpRequest, textStatus){
                        alert(XMLHttpRequest.responseText);
                        alert(textStatus);
                        //HideLoading();
                    },
                    //调用出错执行的函数
                    error: function(){
                        //请求出错处理
                    }
                });

//                layer.msg(JSON.stringify(data.field),function(){
//                    location.href='index.html'
//                });
                return false;
            });
        });
    })

</script>

<!-- 底部结束 -->

</body>
</html>