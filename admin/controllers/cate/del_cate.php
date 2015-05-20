<?php
	$id = $_GET['mid'];
	$db = new libraries_cate;
	$db->del_cate("category",$id);
	header("location:index.php?mod=cate&act=list");
	exit();
?>