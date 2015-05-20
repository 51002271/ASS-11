	<?php
		$data = array();
		$data['title'] = "Thêm mới thành viên";
		$data['template'] = "user/add_user";
		$data['act'] = 2;
		$db = new libraries_user;
		if(isset($_POST['ok'])){
			$data = array(
				"Username" => $_POST['username'],
				"Password" => $_POST['password'],
				"FullName" => $_POST['fullname'],
				"Email" => $_POST['email'],
				"Level" => $_POST['level']
			);
			$name = $db->check_user_name($_POST['username']);
			$email = $db->check_user_email($_POST['email']);
			if($name == FALSE || $email == FALSE){
				$data['template'] = "user/add_user";
				$data['error'] = "Người dùng này đã tồn tại!";
				loadview("layout",$data);
			}else{
				$db->add_user($data);
				header("location:index.php?mod=user&act=list");
				exit();
			}
		}else{
			loadview("layout",$data);
		}
	?>