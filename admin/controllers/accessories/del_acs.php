<?php
	$id = $_GET['pid'];
	$db = new libraries_accessories;
	$db->del_acs("accessories",$id);
	header("location:index.php?mod=accessories&act=list");
	exit();
	
?>