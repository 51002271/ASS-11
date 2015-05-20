<?php
@session_start();
include("ketnoi.php");
if(count($_POST)>0){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$query = mysql_query("INSERT INTO `computerstore`.`customer` (`Id`, `Username`, `Password`, `FullName`, `Email`) VALUES (NULL, '$username', '$password', '$fullname', '$email')",$connect);
	if($query){
		$query_id_customer = mysql_query("select Id from customer where username = '$username'",$connect);
		$result = mysql_fetch_array($query_id_customer);
		$id = $result[0];
		$_SESSION['customer']= $id; 
	}
	header("Location: asus.php");
	
}

?>