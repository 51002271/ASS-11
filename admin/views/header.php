<script type="text/javascript">
	$(document).ready(function(){
		var $items = $("ul#menu li a");
		$items.eq(<?php if(isset($data['act'])){echo $data['act'];}else{ echo 0;} ?>).addClass("selected_lk");
	});
</script>
<div id="header_main_menu">
		<span id="header_main_menu_bg"></span>
		<!--[if !IE]>start header<![endif]-->
		<div id="header">
			<div class="inner">
				
				
				<!--[if !IE]>start user details<![endif]-->
				<div id="user_details">
					<ul id="user_details_menu">
						<li class="welcome">Welcome <strong><a href="javascript:viod(0)"><?php echo $_SESSION['ses_user'] ;?></a> </li>
						
						<li>
							<ul id="user_access">
								
								<li class="last"><a style="font-weight:bold" href="<?php echo base_url."admin/logout.php";?>" title="Thoát">Log out</a></li>
							</ul>
						</li>
						
						
					</ul>
					
					<div id="server_details">
						<dl>
							<dt>Server time :</dt>
							<dd>
								<?php
									date_default_timezone_set('Asia/Ho_Chi_Minh');
									echo date('H:i:s - d/m/Y');
							 	;?>
                             </dd>
						</dl>
						<dl>
							<dt>Last login ip :</dt>
							<dd>
								<?php
									 //Gets the IP address
									 $ip = getenv("REMOTE_ADDR"); 
									 echo $ip; 
							 	;?>
                             </dd>
						</dl>
					</div>
					
				</div>
				
				<!--[if !IE]>end user details<![endif]-->
			</div>
		</div>
		<!--[if !IE]>end header<![endif]-->
		
		<!--[if !IE]>start main menu<![endif]-->
		<div id="main_menu">
			<div class="inner">
			<ul id="menu">
				<li><a href="<?php echo base_url."admin"; ?>"><span class="l"><span></span></span><span class="m"><em>Trang chủ</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=cate&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Danh mục</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=menu&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Danh mục con</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=user&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Thành viên</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=products&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Laptop</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=pc&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Máy bàn</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=accessories&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Phụ kiện</em><span></span></span><span class="r"><span></span></span></a></li>
			</ul>
			</div>
			<span class="sub_bg"></span>
		</div>
		<!--[if !IE]>end main menu<![endif]-->
		
		</div>