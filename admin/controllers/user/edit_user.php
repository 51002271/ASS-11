<?php
	$data = array();
	$data['title'] = "Sửa thông tin thành viên";
	$data['template'] = "user/edit_user";
	$data['act'] = 2;
	$db = new libraries_user;
	$id = $_GET['uid'];
	$data['info'] = $db->getdata($id);
	if(isset($_POST['ok'])){
		if($_POST['password'] !=NULL){
			$data = array(
				"Username" => $_POST['username'],
				"Password" => $_POST['password'],
				"FullName" => $_POST['fullname'],
				"Email" => $_POST['email'],
				"Level" =>$_POST['level']
			);
		}else{
			$data = array(
				"Username" => $_POST['username'],
				"Password" => $_POST['password'],
				"FullName" => $_POST['fullname'],
				"Email" => $_POST['email'],
				"Level" => $_POST['level']
				);
		}
		$name = $db->check_user_name($_POST['username'],$id);
		$email = $db->check_user_email($_POST['email'],$id);
		if($name == NULL || $email == NULL){
			$data['template'] = "user/edit_user";
			$data['info'] = $db->getdata($id);
			$data['error'] = "Tài khoản này đã tồn tại !";
			loadview("layout",$data);
		}else{
			$db->update_user($data,$id);
			header("location:index.php?mod=user&act=list");
			exit();
		}
	}else{
		loadview("layout",$data);
	}
	
?>