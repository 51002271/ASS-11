<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/accessories/list_acs.php");
			break;
			case "add" : require("controllers/accessories/add_acs.php");
			break;
			case "del" : require("controllers/accessories/del_acs.php");
			break;
			case "edit" : require("controllers/accessories/edit_acs.php");
			break;
		}
	}
?>