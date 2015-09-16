<html>
	<head>
		<title>在线用户</title>
		<meta http-equiv="refresh" content="5;url=online_member.php">
	</head>
	<body>
		<h4>在线的朋友有</h4>
		<?php
			require_once("sys_conf.inc");
			$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
			mysql_select_db($DBNAME);
			$str = "select * from user where is_online !=2 order by user_id;";
			$result = mysql_query($str,$link_id);
			//显示查询结果
			echo "<table>";
			while($row = mysql_fetch_row($result));
			{
				$name = $row[1];
				echo "<tr>";
				echo "<td>[$name]</td>";
				echo "<tr>";
			}
			echo "</table>";
			mysql_close($link_id);
		?>
	</body>
</html>