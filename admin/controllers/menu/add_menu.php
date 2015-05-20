	<?php
		$data = array();
		$data['title'] = "Thêm mới danh mục";
		$data['template'] = "menu/add_menu";
		$data['act'] = 2;
		$db = new libraries_menu;
		if(isset($_POST['ok'])){
			$data = array(
				"Name" => $_POST['menu'],
				"Category_id" => $_POST['main_id']
			);
			$name = $db->check_menu($_POST['menu']);
			if($name == FALSE){
				$data['template'] = "menu/add_menu";
				$data['error'] = "Danh mục này đã tồn tại!";
				loadview("layout",$data);
			}else{
				$db->add_menu($data);
				header("location:index.php?mod=menu&act=list");
				exit();
			}
		}else{
			loadview("layout",$data);
		}
	?>