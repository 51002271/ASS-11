<?php
	$data = array();
	$data['title'] = "Sửa thông tin Danh mục";
	$data['template'] = "cate/edit_cate";
	$data['act'] = 2;
	$db = new libraries_cate;
	$id = $_GET['mid'];
	$data['info'] = $db->getdata($id);
	if(isset($_POST['ok'])){
		
		$data = array(
				"Name" => $_POST['namecate'],	
				"table_data" => $_POST['foldercate'],
				);
		$name = $db->check_cate($_POST['namecate'],$id);
		if($name == NULL){
			$data['template'] = "cate/edit_cate";
			$data['info'] = $db->getdata($id);
			$data['error'] = "Tiêu đề này đã tồn tại !";
			loadview("layout",$data);
		}else{
			$db->update_cate($data,$id);
			header("location:index.php?mod=cate&act=list");
			exit();
		}
	}else{
		loadview("layout",$data);
	}
	
?>