<?php
	$id = $_GET['pid'];
	$db = new libraries_PC;
	$db->del_pc("PC",$id);
	header("location:index.php?mod=pc&act=list");
	exit();
	
?>