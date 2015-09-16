<html>
	<head>
		<title>欢迎光临我的聊天室扩展版</title>
		<meta http-equiv = "Content-Type" content = "text/html;charset = gb2312">
		<script language = "JavaScript">
			function NameGetFocus()
			{
				document.frmLogin.user_name.focus();
			}
			function CheckValid()
			{
				if(document.frmLogin.user_name.value == "")
				{
					alert("Please input nick name!");
					document.frmLogin.user_name.focus();
					return false;
				}
				if(document.frmLogin.password.value == "")
				{
					alert("Please input password!");
					document.frmLogin.password.focus();
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body onload = "NameGetFocus()" bgcolor = "#ffffff" text = "#000000">
		<h1 align = "center">欢迎光临我的聊天室扩展版</h1>
		<table width = "75%" border = "0" align = "center" bgcolor = "#ffffff">
			<tr>
				<td align = "center">
					<form name = "frmLogin" method = "post" action = "check_user.php">昵称：
						<input type="text" name="user_name">密码：
						<input type = "password" name = "password">
						<input type = "submit" name = "cmdLogin" value = "登录" onclick = "return CheckValid();">
					</form>
				</td>
			</tr>
			<tr>
				<td align = "center">
					<font color = "$000099">如果您是首次登陆本聊天室，系统将自动注册您的信息</font>
				</td>
			</tr>
		</table>
	</body>
</html>






















