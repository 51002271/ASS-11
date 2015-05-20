<?php
	ob_start();
	session_start();
	require("../libraries/config.php");
	require("../libraries/functions.php");
	require("../libraries/database.php");
	if($_SESSION['ses_level'] != 1){
		header("location:login.php");
		exit();
	}
	if(isset($_GET['mod'])){
		switch($_GET['mod']){
			case "user" 		: require("controllers/user/controller.php");
			break;
			case "products" 	: require("controllers/products/controller.php");
			break;
			case "accessories" 	: require("controllers/accessories/controller.php");
			break;
			case "pc" 			: require("controllers/pc/controller.php");
			break;
			case "menu" 		: require("controllers/menu/controller.php");
			break;
			case "cate" 		: require("controllers/cate/controller.php");
			break;
			case "active" 		: require("controllers/process_active.php");
			break;
			default 			: require("controllers/home.php");
		}
	}else{
		require("controllers/home.php");
	}
	ob_end_flush();
?>