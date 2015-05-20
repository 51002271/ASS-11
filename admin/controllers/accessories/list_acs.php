<?php
	$data = array();
	
	$data['title'] = "Danh sách sản phẩm";
	$data['template'] = "accessories/list_acs";
	$data['act'] = 6;
	$db = new libraries_accessories();
	$pager = new libraries_pager();
	$limit = 10;
	$pager->set_link("index.php?mod=accessories&act=list");
	$total = $db->total_acs();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['acs'] = $db->list_acs($start,$limit);
	
	loadview("layout",$data);
?>