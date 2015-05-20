<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/cate/list_cate.php");
			break;
			case "add" : require("controllers/cate/add_cate.php");
			break;
			case "del" : require("controllers/cate/del_cate.php");
			break;
			case "edit" : require("controllers/cate/edit_cate.php");
			break;
		}
	}
?>