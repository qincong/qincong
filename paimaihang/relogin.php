<?php session_start();?>
<html>
    <head>
        <title>欢迎光临我的拍卖行</title>
        <script>
            function NameGetFocus(){
                document.frmLogin.password.focus();
            }
            function CheckValid(){
                if(document.frmLogin.user_name.value==""){
                    alert("Please input password!");
                    document.frmLogin.user_name.focus();
                    return false;
                }
                if(document.frmLogin.password.value==""){
                    alert("Please input password!");
                    document.frmLogin.password.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
    
    <body onliad="NameGetFocus()" bgcolor="#FFFFFF" text="#000000">
        <?php include("head.html")?>
        <h1 align="center">欢迎光临我的拍卖行</h1>
		<h1 align='center'><font color='red'>您输入的密码错误，请重新输入！</font></h1>
        <table width="75%" border="0" align="center" bgcolor="#FFFFFF">
            <tr>
                <td align="center">
                    <form name="frmLogin" method="post" action="check_user.php">
                        用户名：
                        <input type="text" name="user_name" value = "<?php echo $_SESSION["user_name"]?>">
                        密码：
                        <input type="password" name="password">
                        <input type="submit" name="cmdLogin" value="登录" onclick="return CheckValid();">
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center"><font color="#000099">如果您是首次登录，系统将自动注册你的信息</font></td>
            </tr>
        </table>
    </body>
</html>















