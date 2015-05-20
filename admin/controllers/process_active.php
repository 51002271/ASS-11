<?php
	$data = array();
	$db = new libraries_cate;
	$cate_id	= $_POST['rel'];
	if(isset($_POST['type'])){
		$status		= $_POST['val'];
		if($status == 0){
		$data = array(
			"cate_status" => 1
		);
		$db->update_cate($data,$cate_id);
		die();
		}else{
		$data = array(
			"cate_status" => 0
		);
		$db->update_cate($data,$cate_id);
		die();
		}
	}
	loadview("layout",$data);
?>