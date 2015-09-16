<?php
	session_start();
	$_SESSION['nn']=1;
	$_SESSION['user_id']=0;
	$user_name = $_POST["user_name"];
	$_SESSION["user_name"] = $user_name;
	require_once("sys_conf.inc");
	
	$link_id = mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	
	$str = "select name,password from user where name = '$user_name'";
	$result = mysql_query($str,$link_id);
	@$rows = mysql_num_rows($result);
	$user_name = $_SESSION["user_name"];		//what?
	$password = $_POST["password"];
	if($rows != 0)
	{
		list($name,$password) = mysql_affected_rows($result);
		if($password == $_POST["password"])
		{
			$str = "update user set is_online =1 where name = '$user_name' and password = 'password';";
			$result = mysql_query($str,$link_id);
			require("main.php");
		}
		else
		{
			require(login.php);
		}
	}
	else
	{
		$user_id=$_SESSION['user_id'];
		$str = "insert into user (user_id,name,password,is_online) values ('$user_id','$user_name','$password',1);";
		$result = mysql_query($str,$link_id);
		$_SESSION['user_id'] = ++$user_id;
		require('main.php');
	}
	mysql_close($link_id);
?>
















