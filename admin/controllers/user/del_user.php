<?php
	$id = $_GET['uid'];
	$db = new libraries_user;
	$db->del_user("customer",$id);
	header("location:index.php?mod=user&act=list");
	exit();
?>