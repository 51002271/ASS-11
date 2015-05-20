<?php
	$id = $_GET['pid'];
	$db = new libraries_products;
	$db->del_pro("laptop",$id);
	header("location:index.php?mod=products&act=list");
	exit();
	
?>