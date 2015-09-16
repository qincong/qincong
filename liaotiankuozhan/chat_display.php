<?php session_start(); ?>
<html>
	<head>
		<title>显示用户留言</title>
		<meta http-equiv="refresh" content="5;url=chat_display.php">
	</head>
	<body>
		<?php
			require_once("sys_conf.inc");
			$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
			$DBHOST="abc";
			mysql_select_db($DBNAME);
			$str="select * from chat order by create_time;";
			$result=mysql_query($str,$link_id);
			$rows=mysql_num_rows($result);
			
			@mysql_data_seek($result,$rows-15);
			echo "一共有".$rows;
			if($rows<15)
				$l=$rows;
			else
				$l=15;
			for($i=1;$i<=15;$i++)
			{
				list($number,$author,$create_time,$text,$user_id,$color,$emotion)=mysql_fetch_row($result);
				echo "<table>";
				echo "<tr>";
				echo "<tdalign=left><font color=$color>$create_time";
				echo "[".$author."]".$emotion."说道:$text</font><td>";
				echo "<tr>";
				echo "</table>";
			}
			@mysql_data_seek($result,$rows-20);
			list($limtime)=mysql_fetch_row($result);
			$n=$_SESSION['nn'];
			$nn=$n-14;
			if($nn<0)
				$nn+=15;
			$str="delete from chat where number=($nn-1);";
			$result=mysql_query($str,$link_id);
			mysql_close($link_id);
		?>
	</body>
</html>




















