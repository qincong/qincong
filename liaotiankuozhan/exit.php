<?php
	session_start();
?>
<html>
	<head>
		<title>离开系统</title>
		<script language="JavaScript">
			function exit()
			{
				window.top.location = "login.php";
			}
		</script>
	</head>
	<body>
		<form name="frmExit" method="post" action="exit.php">
			<input type="submit" name="cmdExit" value="离开系统" onclick="exit()">
		</form>
		<?php
			require_once("sys_conf.inc");
			$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
			mysql_select_db($DBNAME);
			$str = "update user set is_online = 0 where name = '$_SESSION[user_name]'";
			//$result = mysql_connect($str,$link_id);
		?>
	</body>
</html>