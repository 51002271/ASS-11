<?php
	$data = array();
	$data['title'] = "Sửa thông tin sản phẩm";
	$data['template'] = "accessories/edit_acs";
	$data['act'] = 6;
	$id = $_GET['pid'];
	$db = new libraries_accessories;
	$data['info'] = $db->getdata($id);
	$data['items'] = $db->list_cate($id);
	if(isset($_POST['ok'])){
		$name	= $_POST['Name'];
		$price	= $_POST['Price'];
		$promotion = $_POST['Promotion'];
		$war	= $_POST['Warrantee'];
		$feature  =$_POST['Feature'];
		$brand 	= $_POST['Brand'];
		$dir = "../images/accessories/";  
		//Gif, jpeg, zip 
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     

			 $tmp_name = $_FILES["upload"]["tmp_name"];  
			 $new_name = $_FILES["upload"]["name"]; 

			if (in_array($_FILES["upload"]["type"], $types)){                     
	
				move_uploaded_file($tmp_name,$dir . $new_name);
					
				  $img = $_FILES["upload"]["name"];
			}else{                 
		
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
	    
			}
			$path ="../images/accessories/";
			$img = $path.$img;
			if($_FILES["upload"]["name"] != NULL){
				$data = array(
					"Name" 	=> $name,
					"Price"	=> $price,
					"Warrantee"		=> $war,
					"Brand"		=> $brand,
					"Img"	=> $img,
					"Promotion" => $promotion,
					"Feature" => $feature,
				);
			}else{
				$data = array(
					"Name" 	=> $name,	
					"Price"	=> $price,
					"Warrantee"		=> $war,
					"Brand"		=> $brand,					
					"Promotion" => $promotion,
					"Feature" => $feature,
					
				);
			}
			$db->update_acs($data,$id);
			header("location:index.php?mod=accessories&act=list");
			exit();
	}
	loadview("layout",$data);
?>