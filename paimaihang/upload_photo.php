<html>
	<head>
		<title>上传图片</title>
	</head>
	<body>
		<?php		//点击上传后才会执行此部分代码
			if(isset($upload)) {
				while(true){
				echo ("已经执行！");}
				if($photo_dir == "") {
					echo "<script>";
					echo "alert(\"你没有上传任何文件\");";
					echo "history.back();";
					echo "</script>";
					exit();
				}
				$fp = opendir(".\upload_image");
				if($fp == 0) {
					mkdir(".\upload_image");
					$fp = opendir(".\upload_image");
				}
				$up = copy("$photo_dir","upload_image/$photo_dir_name");
				if($up == 1) {
					$photo_dir_name = "$photo_dir_name";
					unlink($photo_dir);
					closedir($fp);
					
					echo "<script>";
					echo "alert(\"上传成功！\");";
					echo "location = 'add_goods.php?photo_dir_name = $photo_dir_name&goods_name = $goods_name'";//问号后面的是什么玩意？
					echo "</script>";
				}
				else {
					echo "文件上传失败";
					exit;
				}
			}
		?>
		<table width = "60%" border = "1" cellspacing = "0" cellpadding = "0" align = "center" BGCOLOR = "#f0f0f0">
			<tr bgcolor = "#6699ff">
				<td colspan = 2>
					<div align = "center" class = "white12">上传图片</div>
				</td>
			</tr>
			<tr>
				<td>
					<form action = "upload_photo.php" method = "post" enctype = "multipart/ form-data" name = "UL">
						图片源文件：
				</td>
				<td>
					<input type = "file" name = "photo_dir" size = '15' accept = "upload_ image/x-png,image/gif,image/jpeg">
				</td>
			</tr>
			<tr>
				<td colspan=2 align = center>
					<input type = "Submit" name="upload" value = "上传">
				</td>
			</tr>
			</form>
		</table>
		
	</body>
</html>













