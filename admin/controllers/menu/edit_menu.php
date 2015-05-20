<?php
	$data = array();
	$data['title'] = "Sửa thông tin thành viên";
	$data['template'] = "menu/edit_menu";
	$data['act'] = 2;
	$db = new libraries_menu;
	$id = $_GET['mid'];
	$data['info'] = $db->getdata($id);
	if(isset($_POST['ok'])){
		$data = array(
				"Name" => $_POST['title'],
				"Category_id" => $_POST['main_id'],
				);
		$name = $db->check_menu($_POST['title'],$id);
		if($name == NULL){
			$data['template'] = "menu/edit_menu";
			$data['info'] = $db->getdata($id);
			$data['error'] = "Tiêu đề này đã tồn tại !";
			loadview("layout",$data);
		}else{
			$db->update_menu($data,$id);
			header("location:index.php?mod=menu&act=list");
			exit();
		}
	}else{
		loadview("layout",$data);
	}
	
?>