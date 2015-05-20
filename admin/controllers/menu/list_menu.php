<?php
	$data = array();
	$data['title'] = "Danh sách danh mục";
	$data['template'] = "menu/list_menu";
	$data['act'] = 2;
	$name = new libraries_menu;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=menu&act=list");
	$total = $name->total_menu();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $name->list_menu($start,$limit);
	loadview("layout",$data);