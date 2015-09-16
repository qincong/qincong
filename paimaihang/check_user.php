<?php
	session_start();
	$user_name = $_POST["user_name"];
	$_SESSION["user_name"] = $user_name;
	require_once("sys_conf.inc");
	
	$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	$str = "select name,password from buyer where name = '$user_name'";
	$result = mysql_query($str,$link_id);
	$rows = mysql_num_rows($result);
	$user_name = $_SESSION["user_name"];
	$password = $_POST["password"];
	
	if($rows != 0){
		mysql_close($link_id);
		list($user_name,$password) = mysql_fetch_row($result);
		if($password == $_POST["password"]){
			echo "<script>";
			echo "location = 'display_goods.php';";
			echo "</script>";
		}
		else{
			require("relogin.php");
		}
	}
	else {
		$str = "insert into buyer (name,password) values ('$user_name','$password');";
		$result = mysql_query($str,$link_id);
		echo "<script>";
		echo "location = 'display_goods.php';";
		echo "</script>";
	}
?>