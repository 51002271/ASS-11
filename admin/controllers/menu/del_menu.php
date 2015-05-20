<?php
	$id = $_GET['mid'];
	$db = new libraries_menu;
	$db->del_menu("Category-detail",$id);
	header("location:index.php?mod=menu&act=list");
	exit();
?>