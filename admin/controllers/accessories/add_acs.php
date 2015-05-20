<?php
	$data = array();
	$data['title'] = "Thêm mới sản phẩm";
	$data['template'] = "accessories/add_acs";
	$data['act'] = 6;
	$db = new libraries_accessories;
	$data['cate'] = $db->list_cate();
	if(isset($_POST['ok'])){
		$name	= $_POST['Name'];
		$price	= $_POST['Price'];
		$promotion = $_POST['Promotion'];
		$feature = $_POST['Feature'];
		$war	= $_POST['Warrantee'];
		$Brand	= $_POST['Brand'];
		
		$dir = "../images/accessories/"; 
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
			$path ="../images/accessories/";
			$img = $path.$img;
			$data = array(
				
				"Name" 	=> $name,
				"Price"	=> $price,
				"Warrantee"	=> $war,
				"Brand"	=> $Brand,
				"Img"=> $img,
				"Feature"		=> $feature,
				"Promotion" => $promotion,				
			);
			$db->add_acs($data);
			header("location:index.php?mod=accessories&act=list");
			exit();
	}
	loadview("layout",$data);
?>