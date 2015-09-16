<html>
	<head>
		<title>添加商品</title>
		<script>
			function NameGetFocus(){
				document.frmAdd.goods_name.focus();
			}
			function CheckValid(){
				if(documentl.frmAdd.goods_name == ""){
					alert("Please input good name!");
					document.frmAdd.goods_name.focus();
					return false;
				}
				return true;
			}
		</script>
	</head>
	
	<body onload = "NameGetFocus();">
		<?php include("head.html")?>
		<h1 align = "center">添加新商品</h1>
		<table width = "60%" border = "1" align = "center" bgcolor = "#f0f0f0">
			<form method = "post" name = "frmAdd" action = "check_goods.php">
				<tr>
					<td width = "15%" height = "29">名称：</td>
					<td colspan = "2" height = "29" width = "78%">
						<input type = "text" name = "goods_name" value = <?php if(isset($goods_name)) echo $goods_name; else echo ""?>>
					</td>
				</tr>
				<tr>
					<td width = "15%" height = "29">图片</td>
					<td colspan = "2" height = "29" width = "78%" >
						<?php
							if(isset($photo_dir_name)){
								echo "<a href='upload_image/$photo_dir_name' target='_blank'>【$photo_dir_name】</a>";
							//	echo "<input type = "hidden" name = "phototdir" value = "$photo_dir_name">";
							}
							else{
								echo "【未上传图片】";
								echo "<input type = 'hidden' name = 'phototdir' value = ''>";
							}
						?>
						<a href = "upload_photo.php?goods_name = "">上传图片</a>"
						<input type="hidden" name = "phototdir" value = <?php if(isset($photo_dir_name)) echo $photo_dir_name; ?>>
					</td>
				</tr>
				<tr>
					<td width = "15%" height = "29">商品介绍:</td>
					<td colspan="3" valign="middle" align="left">
						<textarea rows="6" name = "description" cols="55" wrap = "VIRTUAL"></textarea>
					</td>
				</tr>
				<tr>
					<td width = "15%" height = "29">单位：</td>
					<td colspan="2" height = "29" width="78%">
						<input type="text" name="uint" size="40">
					</td>
				</tr>
				<tr>
					<td width = "15%" height = "29">初始价格：</td>
					<td colspan = "2" height = "29" width = "78%">
						<input type = "text" name = "init_price" size="40">
					</td>
				</tr>
				<tr>
					<td width = "15%" height = "29">结束时间：</td>
					<td colspan = "2" height = "29" width = "78%">
						<input type = "text" name = "endtime" size = "40">
					</td>
				</tr>
				<tr>
					<td colspan = "3" height = "24">
						<div align = "center">
							<font color="#00ff00">
								<input type = "submit" name = "cmdadd" value = "确定" onclick = "return CheckValid();">
								&nbsp;&nbsp;&nbsp;
								<input type = "reset" value = "重写" name = "cencel">
							</font>
						</div>
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>














