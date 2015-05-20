<?php
	$data = array();
	
	$data['title'] = "Danh sách sản phẩm";
	$data['template'] = "pc/list_pc";
	$data['act'] = 6;
	$db = new libraries_pc();
	$pager = new libraries_pager();
	$limit = 10;
	$pager->set_link("index.php?mod=pc&act=list");
	$total = $db->total_pc();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['pro'] = $db->list_pc($start,$limit);
	loadview("layout",$data);
?>