<?php
	require_once("sys_conf.inc");
	$link_id = mysql_connect($DBHODT,$DBUSER,&DBPWD);
	mysql_select_db($DBNAME);
	
	$goods_name = $_POST['goods_name'];
	$description = $_POST['description'];
	$init_price = $_POST['init_price'];
	$uint = $_POST['uint'];
	$endtime = $_POST['endtime'];
	$photodir = $_POST['photodir'];
	$str = "insert into goods (name,description,init_price,unit,endtime,photodir)";
	$str .= "values('$goods_name','$description','$init_price','$uint','$endtime','$photodir');";
	$result = mysql_query($str,$link_id);
	mysql_close($link_id);
	
	require("display_goods.php");
?>