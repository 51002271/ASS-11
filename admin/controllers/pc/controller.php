<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/pc/list_pc.php");
			break;
			case "add" : require("controllers/pc/add_pc.php");
			break;
			case "del" : require("controllers/pc/del_pc.php");
			break;
			case "edit" : require("controllers/pc/edit_pc.php");
			break;
		}
	}
?>