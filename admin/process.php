<?php
	session_start();
    require("../libraries/config.php");
	require("../libraries/database.php");
	require("libraries/user.php");
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$db = new libraries_user;
	$data = $db->check_login($user,$pass);
	if($data == FALSE){
		echo "false";
	}else{
		echo "true";
		$_SESSION['ses_userid'] = $data['Id'];
		$_SESSION['ses_user'] = $data['Username'];
		$_SESSION['ses_level'] = $data['Level'];
	}	
?>