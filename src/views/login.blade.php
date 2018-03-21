<!DOCTYPE html>
<html>
<head>
<style>
ul
{
list-style-type:none;
margin:0;
padding:0;
}
li
{
display:inline;
}
</style>
<title>登录</title>
<meta charset="UTF-8">
</head>
<body>
    <div class="content" align="center">
        <!--头部-->
        <div class="header">
		<ul>
        <li><a href="/view.html">查看留言</a></li>
        <!-- <li><a href="/submitmsg.html">发布留言</a></li> -->
        </ul>
        <h1>登录{{$msg}}页面</h1>
        </div>
        <!--中部-->
        <div class="middle">
            <form id="loginform" action="ylog" method="post">
                <table border="0">
                    <tr>
                        <td>用户名：</td>
                        <td>
                            <input type="text" id="name" name="username" required="required"
                            value="<?php echo isset($_COOKIE["wang"])?$_COOKIE["wang"]:"";?>">
                        </td>
                    </tr>
                    <tr>
                        <td>密&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="remember"><small>记住我
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <!--提示信息-->
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名或密码错误！";
                                    break;
                                    case 2:
                                    echo "用户名或密码不能为空！";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="login" name="login" value="登录">
                            <input type="reset" id="reset" name="reset" value="重置">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            还没有账号，快去<a href="r">注册</a>吧！
                        </td>
                    </tr>
                </table>
            </form>
            <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
            <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
            <script>
            <!-- validata表单验证 -->
            var validator1;
    $(document).ready(function () {
        validator1 = $("#loginform").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 11,
                    maxlength: 11
                },
                password: {
                    required: true,
                    minlength: 2,
                    maxlength: 16
                }
            //     "confirm-password": {
            //         equalTo: "#password"
            //     }
            },
            messages: {
                username: {
                    required: '请输入用户名',
                    minlength: '手机号格式不对',
                    maxlength: '手机号格式不对'
                },
                password: {
                    required: '请输入密码',
                    minlength: '密码不能小于2个字符',
                    maxlength: '密码不能超过16个字符'
                }
                // "confirm-password": {
                //     equalTo: "两次输入密码不一致"
            }
        });
    });
            </script> 
        </div>
        <!--脚部-->
    </div>
</body>


</html>