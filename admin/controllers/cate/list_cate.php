<?php
	$data = array();
	$data['title'] = "Danh sách Menu";
	$data['template'] = "cate/list_cate";
	$data['act'] = 2;
	$name = new libraries_cate;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=cate&act=list");
	$total = $name->total_cate();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $name->list_cate($start,$limit);
	loadview("layout",$data);