<?php
	$data = array();
	$data['title'] = "Thêm mới sản phẩm";
	$data['template'] = "products/add_products";
	$data['act'] = 6;
	$db = new libraries_products;
	$data['cate'] = $db->list_cate();
	if(isset($_POST['ok'])){
		$brand =$POST['Brand'];
		$name	= $_POST['Name'];
		$price	= $_POST['Price'];
		$promotion = $_POST['Promotion'];
		$feature = $_POST['Feature'];
		$war	= $_POST['Warrantee'];
		$detail	= $_POST['Detail'];
		$new = $_POST['New'];
		$dir = "../images/temp/"; 
		//Kiều file, Gif, jpeg, zip 
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     
		//Check to determine if the submit button has been pressed  
		//Shorten Variables  
			 $tmp_name = $_FILES["upload"]["tmp_name"];  
			 $new_name = $_FILES["upload"]["name"]; 
		//Check MIME Type  
			if (in_array($_FILES["upload"]["type"], $types)){                     
				 //Move file from tmp dir to new location  
				move_uploaded_file($tmp_name,$dir . $new_name);   
				  $img =  $_FILES["upload"]["name"];
			}else{                 
			//Print Error Message  
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			
			}
			$path ="../images/temp/";
			$img = $path.$img;
			$data = array(
				"Brand" =>$brand,
				"Name" 	=> $name,
				"Price"	=> $price,
				"Warrantee"	=> $war,
				"Detail"	=> $detail,
				"Img"=> $img,
				"Feature"		=> $feature,
				"Promotion" => $promotion,
				"Is_New_Product" => $new
				
			);
			$db->add_pro($data);
			header("location:index.php?mod=products&act=list");
			exit();
	}
	loadview("layout",$data);
?>