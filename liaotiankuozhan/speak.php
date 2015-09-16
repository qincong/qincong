<?php session_start(); ?>
<html>
	<head>
		<title>发言</title>
	</head>
	<body onload=NameGetFocus()>
		<?php
			require_once("sys_conf.inc");
			
			if(isset($_POST["slt_text_color"]))		//这个位置少了一个表情的选项
			{
				switch($_POST["slt_text_color"])
				{
					case "红色":
						$color = "red";
						break;
					case "蓝色":
						$color = "blue";
						break;
					case "灰色":
						$color = "gray";
						break;
					default:
						$color="black";
						break;
				}
			}
			$emotion = "smile";
			$text = $_POST["text"];
			
			if($text != "")
			{
				$nn=$_SESSION['nn'];
				$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
				mysql_select_db($DBNAME);
				echo $text;
				$time = date("h:i:s");
				$author = $_SESSION["user_name"];
				$str = "insert into chat";
				$str .= "(number,create_time,author,text,color,emotion) values ('$nn','$time','$author','$text','$color','$emotion');";
				$nn++;
				if($nn>15)
					$nn-=15;
				$_SESSION['nn']=$nn;
				mysql_query($str,$link_id);
				mysql_close($link_id);
			}
		?>
		<script language = "JavaScript">
			function NameGetFocus()
			{
				document.speak.text.focus();
			}
		</script>
		<form action = "speak.php" name="speak" method = "post" target = "_self">
			<input type = "text" name = "text" cols = "20">
			<input type = "submit" value = "发言">
			
			<select size=1 name="slt_text_color">
				<?php
					switch($color)
					{
						case "red":
							$slt_text_color ="红色";
							break;
						case "blue":
							$slt_text_color = "蓝色";
							break;
						case "gray":
							$slt_text_color = "灰色";
							break;
						default:
							$slt_text_color = "";
					}												
				?>
					<option selected> <?php echo $emotion; ?> </option>
					<option>害羞的</option>
					<option>高兴地</option>
					<option>难过地</option>
			</select>
		</form>
	</body>
</html>















