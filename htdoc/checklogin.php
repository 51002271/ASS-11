<?php
include("ketnoi.php"); 
@session_start();
if(count($_POST)>0)
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$query = mysql_query("select * from customer where username = '$username' and password = '$password'");
	$result = mysql_fetch_array($query);
	if($result){
		$_SESSION['customer'] =$result["Id"];
	}
	else{
		$_SESSION['error']= "Bạn đăng nhập sai rồi.!";
	}
	
	
	header("Location: products.php");
	
}
else
{
	
}
?>