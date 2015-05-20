	<?php
		$data = array();
		$data['title'] = "Thêm mới Danh mục";
		$data['template'] = "cate/add_cate";
		$data['act'] = 2;
		$db = new libraries_cate;
		if(isset($_POST['ok'])){
			$data = array(
				"Name" => $_POST['namecate'],
				"table_data" => $_POST['foldercate'],
			);
			$name = $db->check_cate($_POST['namecate']);
			if($name == FALSE){
				$data['template'] = "cate/add_cate";
				$data['error'] = "Danh mục này đã tồn tại!";
				loadview("layout",$data);
			}else{
				$db->add_cate($data);
				header("location:index.php?mod=cate&act=list");
				exit();
			}
		}else{
			loadview("layout",$data);
		}
	?>