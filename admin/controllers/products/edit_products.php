<?php
	$data = array();
	$data['title'] = "Sửa thông tin sản phẩm";
	$data['template'] = "products/edit_products";
	$data['act'] = 6;
	$id = $_GET['pid'];
	$db = new libraries_products;
	$data['info'] = $db->getdata($id);
	$data['items'] = $db->list_cate($id);
	if(isset($_POST['ok'])){
		$brand = $_POST['Brand'];
		$name	= $_POST['Name'];
		$price	= $_POST['Price'];
		$promotion = $_POST['Promotion'];
		$war	= $_POST['Warrantee'];
		$feature  =$_POST['Feature'];
		$detail 	= $_POST['Detail'];
		$new = $_POST['New'];
		$dir = "../images/temp/";  
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
			$path ="../images/temp/";
			$img = $path.$img;
			if($_FILES["upload"]["name"] != NULL){
				$data = array(
					"Brand" => $brand,
					"Name" 	=> $name,
					"Price"	=> $price,
					"Warrantee"		=> $war,
					"Detail"		=> $detail,
					"Img"	=> $img,
					"Promotion" => $promotion,
					"Feature" => $feature,
					"Is_New_Product" => $new
				);
			}else{
				$data = array(
					"Brand" => $brand,
					"Name" 	=> $name,	
					"Price"	=> $price,
					"Warrantee"		=> $war,
					"Detail"		=> $detail,					
					"Promotion" => $promotion,
					"Feature" => $feature,
					"Is_New_Product" => $new
					
				);
			}
			$db->update_pro($data,$id);
			header("location:index.php?mod=products&act=list");
			exit();
	}
	loadview("layout",$data);
?>