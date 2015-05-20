	<?php 
	@session_start();
	include("ketnoi.php");
	if(isset($_SESSION['error'])){
		echo "<script>alert('{$_SESSION['error']}');</script>";
			//Tranh cho truong hop refresh lai trang thi bi script bao loi
		unset($_SESSION['error']);
	}
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Laptop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="..\css\css-v=s0sTbq4cCKHhaWgXBsoPjjc9d-zjr1P1RNAaeFhDWbc1.css" rel="stylesheet" />
		<link href="..\css\listproduct.css-v=3110.css" rel="stylesheet" />
		<link href="..\css\fixlistproduct.css-v=3110.css" rel="stylesheet" />
		<link href="..\css\jquery.jcarousel.css-v=3110.css" rel="stylesheet" />
		<link href="..\css\breadcrumbs.css-v=3110.css" rel="stylesheet" />
		<link href="..\css\style1.css" rel="stylesheet"/>
		<link href="..\css\style2.css" rel="stylesheet"/>
		<link href="..\css\style3.css" rel="stylesheet"/>
		<link href="..\css\style4.css" rel="stylesheet"/>
		<link href="..\css\bootstrap.min.css" rel="stylesheet"/>
		<script type="text/javascript" src="..\js\jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="..\js\jssor.js"></script>
		<script type="text/javascript" src="..\js\jssor.slider.js"></script>
		
		<style>
		/* jssor slider thumbnail navigator skin 11 css */
	            /*
	                .jssort11 .p            (normal)
	                .jssort11 .p:hover      (normal mouseover)
	                .jssort11 .pav          (active)
	                .jssort11 .pav:hover    (active mouseover)
	                .jssort11 .pdn          (mousedown)
	                */
	                .jssort11 {
	                	position: absolute;
	                	width: 280px;
	                	height: 300px;
	                	font-family: Arial, Helvetica, sans-serif;
	                	-moz-user-select: none;
	                	-webkit-user-select: none;
	                	-ms-user-select: none;
	                	user-select: none;
	                }

	                .jssort11 .p {
	                	position: absolute;
	                	width: 280px;
	                	height: 69px;
	                	background: #EFEFEF;
	                }

	                .jssort11 .tp {
	                	position: absolute;
	                	top: 0;
	                	left: 0;
	                	width: 100%;
	                	height: 100%;
	                	border: none;
	                }

	                .jssort11 .i, .jssort11 .pav:hover .i {
	                	position: absolute;
	                	top: 3px;
	                	left: 3px;
	                	width: 60px;
	                	height: 30px;
	                	border: white 1px dashed;
	                }

	                * html .jssort11 .i {
	                	width /**/: 62px;
	                	height /**/: 32px;
	                }

	                .jssort11 .pav .i {
	                	border: white 1px solid;
	                }

	                .jssort11 .t, .jssort11 .pav:hover .t {
	                	position: absolute;
	                	top: 3px;
	                	left: 5px;
	                	width: 280px;
	                	height: 32px;
	                	line-height: 32px;
	                	text-align: left;
	                	color: Black;
	                	font-size:16px;
	                	font-weight: 600;
	                }

	                .jssort11 .pav .t, .jssort11 .p:hover .t {
	                	color: #fff;
	                }

	                .jssort11 .t{
	                	transition: color 2s;
	                	-moz-transition: color 2s;
	                	-webkit-transition: color 2s;
	                	-o-transition: color 2s;
	                }

	                .jssort11 .p:hover .t, .jssort11 .pav:hover .t {
	                	transition: none;
	                	-moz-transition: none;
	                	-webkit-transition: none;
	                	-o-transition: none;
	                }

	                .jssort11 .p:hover, .jssort11 .pav:hover {
	                	background: SandyBrown;
	                }

	                .jssort11 .pav, .jssort11 .p.pdn {
	                	background: #D41212;
	                }
	                </style>
	                
	                <style>
	                /* jssor slider bullet navigator skin 01 css */
	            /*
	            .jssorb01 div           (normal)
	            .jssorb01 div:hover     (normal mouseover)
	            .jssorb01 .av           (active)
	            .jssorb01 .av:hover     (active mouseover)
	            .jssorb01 .dn           (mousedown)
	            */
	            .jssorb01 {
	            	position: absolute;
	            }

	            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
	            	position: absolute;
	            	/* size of bullet elment */
	            	width: 12px;
	            	height: 12px;
	            	filter: alpha(opacity=70);
	            	opacity: .7;
	            	overflow: hidden;
	            	cursor: pointer;
	            	border: #000 1px solid;
	            }

	            .jssorb01 div {
	            	background-color: gray;
	            }

	            .jssorb01 div:hover, .jssorb01 .av:hover {
	            	background-color: #d3d3d3;
	            }

	            .jssorb01 .av {
	            	background-color: #fff;
	            }

	            .jssorb01 .dn, .jssorb01 .dn:hover {
	            	background-color: #555555;
	            }
	            </style>
	            <style> 
	            .captionOrange, .captionBlack
	            {
	            	color: #fff;
	            	font-size: 20px;
	            	line-height: 30px;
	            	text-align: center;
	            	border-radius: 4px;
	            }
	            .captionOrange
	            {
	            	background: #EB5100;
	            	background-color: rgba(235, 81, 0, 0.6);
	            }
	            .captionBlack
	            {
	            	font-size:16px;
	            	background: #000;
	            	background-color: rgba(0, 0, 0, 0.4);
	            }
	            a.captionOrange, A.captionOrange:active, A.captionOrange:visited
	            {
	            	color: #ffffff;
	            	text-decoration: none;
	            }
	            a.captionOrange:hover
	            {
	            	color: #eb5100;
	            	text-decoration: underline;
	            	background-color: #eeeeee;
	            	background-color: rgba(238, 238, 238, 0.7);
	            }
	            .bricon
	            {
	            	background: url(../img/browser-icons.png);
	            }
	            </style>
				
	        </head>
	        <body>
	        	<div id="homepage">
	        		<div class="page">
	        			<!-- Header -->
	        			<header class="fshop-header">
	        				<div class="fhop-search search">
	        					<div class="wrap">
	        						<form>
	        							<input name="tukhoa" type="text" class="text keyword" value="" placeholder="Bạn muốn tìm gì?">
	        							<input type="submit" class="submit btnSearch" value="Tìm kiếm">
	        						</form>
	        					</div>
	        				</div>
	        				<div class="fshop-support"> Tư vấn miễn phí <br /> <strong>1900 1234</strong> </div>
	        				
	        				<div class="fshop-login-reg">
	        					<?php 
	        					if(isset($_SESSION['customer']))
	        					{
	        						$query= mysql_query("Select * from customer where Id= {$_SESSION['customer']}",$connect);
	        						$result = mysql_fetch_array($query);
	        						$customer_fullname = $result["FullName"];
	        						echo "Xin chào ".$customer_fullname;
	        						echo "<a href=logout.php> Logout</a>";
	        					}
	        					else
	        					{
	        						?>
	        						<ul class="clearfix">
	        							<li>
	        								<a href="" title="Đăng nhập">Đăng nhập</a>
	        								<div class="user-form">
	        									<div class="fshop-profile-box">
	        										<div class="fshop-profile-line-top"></div>
	        										<form class="Login form" action="checklogin.php" method="POST" id="Login">
	        											<p>
	        												<input type="text" name="username" placeholder="Tên đăng nhập" class="text validate[required]">
	        											</p>
	        											<p>
	        												<input type="password" placeholder="Mật khẩu"  name="password" class="text validate[required,minSize[6]]">
	        											</p>
	        											<p><span class="resetpass">Quên mật khẩu?</span></p>
	        											<p class="text-right">
	        												<button id="btnLogin" name="btnLogin" type="submit" class="submit">Đăng nhập</button>
	        											</p>
	        										</form>
	        									</div>
	        								</div>
	        							</li>
	        							<li>
	        								<a href="javascript:;" title="Đăng ký">Đăng ký</a>
	        								<div class="user-form">
	        									<div class="fshop-profile-box">
	        										<form id="Register" class="Register form" action="register-customer.php" method="POST">
	        											<p>
	        												<input id="UserName" type="text" placeholder="Họ và tên" name="fullname" class="text validate[required,minSize[5]]">
	        											</p>
	        											<p>
	        												<input id="email" name="username" type="text" placeholder="e-Mail" class="text validate[required,custom[email]]">
	        											</p>
	        											<p>
	        												<input type="password" id="password" name="password" placeholder="Mật khẩu" value="" class="text validate[required,minSize[6]]">
	        											</p>
	        											<p>
	        												<input id="txtPasswordConfirm" type="password" placeholder="Nhắc lại mật khẩu" class="text validate[required,minSize[6]]" />
	        											</p>
	        											<p>
	        												<input id="email" name = "email" type="text" placeholder="Email" class="text validate[required,minSize[6]]" />
	        											</p>
	        											<p class="text-right">
	        												<button id="btnRegister" name="btnRegister" type="submit" class="submit">Đăng ký</button>
	        											</p>
	        										</form>
	        									</div>
	        								</div>
	        							</li>
	        						</ul>
	        						<?php	
	        					}
	        					?>
	        				</div>
	        				<li class="profile menu">
	        					<a href="javascript:;">
	        						<span class="icon"></span>
	        						<h2 style="font-size: 12px; margin-top: 2px">Thành viên</h2>
	        					</a>
	        					<div class="submenu">
	        						<div class="col">
	        							<h3>Đăng ký</h3>
	        							<form id="Register" class="Register form" action="#" method="POST">
	        								<p>
	        									<input id="UserName" type="text" placeholder="Họ và tên" name="UserName" class="text validate[required,minSize[5]]">
	        								</p>
	        								<p>
	        									<input id="email" name="email" type="text" placeholder="e-Mail" class="text validate[required,custom[email]]">
	        								</p>
	        								<p>
	        									<input type="password" id="txtPassword" name="password" placeholder="Mật khẩu" value="" class="text validate[required,minSize[6]]">
	        								</p>
	        								<p>
	        									<input id="txtPasswordConfirm" type="password" placeholder="Nhắc lại mật khẩu" class="text validate[required,minSize[6]]" />
	        								</p>
	        								<p><span id="msg"></span></p>
	        								<p class="text-right">
	        									<button id="btnRegister" name="btnRegister" type="submit" class="submit">Đăng ký</button>
	        								</p>
	        							</form>
	        						</div>
	        						<div class="col">
	        							<h3>Đăng Nhập</h3>
	        							<form class="Login form" action="#" method="POST" id="Login">
	        								<p>
	        									<input type="text" name="email" placeholder="e-Mail hoặc điện thoại" id="email1" class="text validate[required]">
	        								</p>
	        								<p>
	        									<input type="password" placeholder="Mật khẩu" id="password" name="password" class="text validate[required,minSize[6]]">
	        								</p>
	        								<p><span class="resetpass">Quên mật khẩu?</span></p>
	        								<p><span id="msglogin"></span></p>
	        								<p class="text-right">
	        									<button id="btnLogin" name="btnLogin" type="submit" class="submit">Đăng nhập</button>
	        								</p>
	        							</form>
	        						</div>
	        					</div>
	        				</li>
	        				<nav class="fshop-nav-menu">
	        					<div class="fshop-nav">
	        						<ul>
	        							<?php
										//Select tat ca danh muc cha
	        							$sql = mysql_query("select * from category",$connect);
	        							while ($row = mysql_fetch_array($sql))
	        							{
	        								?>
	        								<li>
	        									<a href="" class="">
	        										<i class="icon-apple"></i> 
	        										<h2><?php echo $row["Name"];?></h2>
	        									</a>
	        									<div class="fshop-nav-submenu clearfix">
	        										<div class="fshop-nsm-apple">
	        											<div class="fshop-nsm-col fshop-nsm-col50">
	        												<ul class="fshop-nsm-list fshop-nsm-double">
	        													<?php
															//select tat ca danh muc con
	        													$sql_danhmuccon = mysql_query("select * from category_detail where Category_id= {$row["Id"]}",$connect);
	        													while ($sub_row= mysql_fetch_array($sql_danhmuccon))
	        													{
	        														?>
	        														<li><a href="
	        															<?php 
	        															echo ""."products.php?type=". $row["table_data"] ."&Brand=".$sub_row["Name"];
	        															?>
	        															">	<?php echo  $sub_row["Name"] ; ?>	</a></li>
	        															<?php
	        														}
	        														?>
	        													</ul>
	        												</div>
	        											</div>
	        										</div>
	        									</li>
	        									<?php
	        								}
	        								
	        								?>
	        							</ul>
	        						</div>
	        					</nav>
	        				</div>
	        			</header>

	        			<div class="top-slider">
	        				<div class="home-slider">
	        					<script>
	        					jQuery(document).ready(function ($) {
	        						
	        						var _SlideshowTransitions = [
	            //Swing Outside in Stairs
	            {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} }

	            //Dodge Dance Outside out Stairs
	            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

	            //Dodge Pet Outside in Stairs
	            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

	            //Dodge Dance Outside in Random
	            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

	            //Flutter out Wind
	            , { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseOutWave, $Clip: $JssorEasing$.$EaseInOutQuad }, $Outside: true, $Round: { $Top: 1.3} }

	            //Collapse Stairs
	            , { $Duration: 1200, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $JssorEasing$.$EaseOutQuad }

	            //Collapse Random
	            , { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }

	            //Vertical Chess Stripe
	            , { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} }

	            //Extrude out Stripe
	            , { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} }

	            //Dominoes Stripe
	            , { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseOutJump, $Round: { $Top: 1.5} }
	            ];

	            var options = {
	            	$AutoPlay: true,                                    
	            	$AutoPlaySteps: 1,                                  
	            	$AutoPlayInterval: 4000,                        
	            	$PauseOnHover: 1,                              

	            	$ArrowKeyNavigation: true,   			           
	            	$SlideDuration: 500,                               
	            	$MinDragOffsetToSlide: 20,                          
	            	
	            	$SlideSpacing: 0, 					               
	            	$DisplayPieces: 1,                                 
	            	$ParkingPosition: 0,                               
	            	$UISearchMode: 1,                                  
	            	$PlayOrientation: 1,                               
	            	$DragOrientation: 3,                               

	            	$SlideshowOptions: {                               
	            		$Class: $JssorSlideshowRunner$,                 
	            		$Transitions: _SlideshowTransitions,            
	            		$TransitionsOrder: 1,                         
	            		$ShowLink: true                                   
	            	},

	            	$BulletNavigatorOptions: {                               
	            		$Class: $JssorBulletNavigator$,                       
	            		$ChanceToShow: 2,                              
	            		$AutoCenter: 0,                                
	            		$Steps: 1,                                     
	            		$Lanes: 1,                                     
	            		$SpacingX: 10,                                  
	            		$SpacingY: 10,                                  
	            		$Orientation: 1                                
	            	},

	            	$ArrowNavigatorOptions: {
	            		$Class: $JssorArrowNavigator$,              
	            		$ChanceToShow: 2                             
	            	}
	            };

	            var jssor_slider2 = new $JssorSlider$("slider-container", options);

	            
	            function ScaleSlider() {
	            	var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
	            	if (parentWidth)
	            		jssor_slider2.$ScaleWidth(Math.min(parentWidth, 700));
	            	else
	            		window.setTimeout(ScaleSlider, 30);
	            }

	            ScaleSlider();

	            $(window).bind("load", ScaleSlider);
	            $(window).bind("resize", ScaleSlider);
	            $(window).bind("orientationchange", ScaleSlider);

	            //responsive code end
	        });
	</script>

	<script>

	jQuery(document).ready(function ($) {
		var options = {
			$AutoPlay: true,                                   
			$AutoPlaySteps: 1,                                  
			$AutoPlayInterval: 4000,                            
			$PauseOnHover: 1,                              
			$Loop: 0,                                       

			$ArrowKeyNavigation: true,   			            
			$SlideDuration: 500,                                 
			$MinDragOffsetToSlide: 20,                          
			
			$SlideSpacing: 5, 					               
			$DisplayPieces: 1,                                 
			$ParkingPosition: 0,                               
			$UISearchMode: 1,                                  
			$PlayOrientation: 1,                                
			$DragOrientation: 3,                               

			$ThumbnailNavigatorOptions: {
				$Class: $JssorThumbnailNavigator$,              
				$ChanceToShow: 2,                              

				$Loop: 2,                                       
				$AutoCenter: 3,                                
				$Lanes: 1,                                      
				$SpacingX: 4,                                   
				$SpacingY: 4,                                   
				$DisplayPieces: 4,                              
				$ParkingPosition: 0,                            
				$Orientation: 2,                               
				$DisableDrag: false                             
			}
		};

		var jssor_slider1 = new $JssorSlider$("slider1_container", options);

	            //responsive code begin
	            //you can remove responsive code if you don't want the slider scales while window resizes
	            function ScaleSlider() {
	            	var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
	            	if (parentWidth) {
	            		var sliderWidth = parentWidth;

	            		
	            		sliderWidth = Math.min(sliderWidth, 300);

	            		jssor_slider1.$ScaleWidth(sliderWidth);
	            	}
	            	else
	            		window.setTimeout(ScaleSlider, 30);
	            }
	            ScaleSlider();

	            $(window).bind("load", ScaleSlider);
	            $(window).bind("resize", ScaleSlider);
	            $(window).bind("orientationchange", ScaleSlider);
	            //responsive code end
	        });
	</script>



	<div style="float:left;width:20%;height:300px;">

		<div id="slider1_container" style="position: relative; top: 0px; left: 30px; width: 300px; height: 300px;overflow: hidden; ">

			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 100px; height: 300px;
			overflow: hidden;">
			<div>
				
				<div u="thumb">
					
					<div class="t">Đặt trước The new MacBook</div>
					
				</div>
			</div>
			<div>
				
				<div u="thumb">
					
					<div class="t">Lần đầu tiên trả góp online</div>
					
				</div>
			</div>
			<div>
				
				<div u="thumb">
					
					<div class="t">Trả lời hay nhận quà Hot với M4 Aqua</div>
					
				</div>
			</div>
			<div>
				
				<div u="thumb">
					
					<div class="t">Galaxy Tab A hoàn tiền đến 4 triệu</div>
					
				</div>
			</div>
			<div>
				
				<div u="thumb">
					
					<div class="t">Mua trả góp tặng thêm tiền</div>
					
				</div>
			</div>
		</div>
		
		<!--#region ThumbnailNavigator Skin Begin -->
		<div u="thumbnavigator" class="jssort11" style="left: 0px; top:0px;">
			<!-- Thumbnail Item Skin Begin -->
			<div u="slides" style="cursor: default;">
				<div u="prototype" class="p" style="top: 0; left: 0;">
					<div u="thumbnailtemplate" class="tp"></div>
				</div>
			</div>
			<!-- Thumbnail Item Skin End -->
		</div>
	
	</div>


	</div>


	<div id="slider-container" class="slider-container" style="position: relative;width:700px;float:left;overflow: hidden;" >
		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; left: 20px; right:0px; top: 0px; width: 700px; height: 265px;
		overflow: hidden;">
		<div>
			<a u=image href="#"><img src="../images/slide/h1.jpg" /></a>
		</div>
		<div>
			<a u=image href="#"><img src="../images/slide/h2.jpg" /></a>
		</div>
		<div>
			<a u=image href="#"><img src="../images/slide/h3.jpg" /></a>
		</div>
		<div>
			<a u=image href="#"><img src="../images/slide/h4.jpg" /></a>
		</div>
	</div>


	<div u="navigator" class="jssorb01" style="bottom: 35px; right: 10px;">

		<div u="prototype"></div>
	</div>

	<style>
	/* jssor slider arrow navigator skin 05 css */
	            /*
	            .jssora05l                  (normal)
	            .jssora05r                  (normal)
	            .jssora05l:hover            (normal mouseover)
	            .jssora05r:hover            (normal mouseover)
	            .jssora05l.jssora05ldn      (mousedown)
	            .jssora05r.jssora05rdn      (mousedown)
	            */
	            .jssora05l, .jssora05r {
	            	display: block;
	            	position: absolute;
	            	/* size of arrow element */
	            	width: 40px;
	            	height: 40px;
	            	cursor: pointer;
	            	background: url(../images/icon/a17.png) no-repeat;
	            	overflow: hidden;
	            }
	            .jssora05l { background-position: -10px -40px; }
	            .jssora05r { background-position: -70px -40px; }
	            .jssora05l:hover { background-position: -130px -40px; }
	            .jssora05r:hover { background-position: -190px -40px; }
	            .jssora05l.jssora05ldn { background-position: -250px -40px; }
	            .jssora05r.jssora05rdn { background-position: -310px -40px; }
	            </style>

	            <!-- Arrow Left -->
	            <span u="arrowleft" class="jssora05l" style="top: 123px; left: 25px;">
	            </span>
	            <!-- Arrow Right -->
	            <span u="arrowright" class="jssora05r" style="top: 123px; right: 5px;">
	            </span>
	            
	        </div >
	        
	        <div style="float:left;padding-left:10px;width:25%;height:300px;"> 

	        	<div class="pgwSlider narrow"><div class="ps-current" style="width: 100%; height: 284px;">
	        		<ul>
	        			<li class="elt_1" style="opacity: 1; z-index: 2; display: list-item;"><a href="" target="_blank"><img src="../images/slide/hr1.jpg" alt=""></a></li>
	        			<li class="elt_2" style="z-index: 1; display: none; opacity: 0;"><a href="" target="_blank"><img src="../images/slide/hr2.jpg" alt=""></a></li></ul><span class="ps-caption" style="display: none;"></span></div><ul class="top-right-ads ps-list" style="display: none;">
	        			<li class="elt_1" style="cursor: pointer; opacity: 1; width: 50%; height: 139px;"><a href="" title="Bảng xếp hạng Right Main" id="1326" class="banner_click" target="_blank"><img src="../images/slide/hr1.jpg"></a></li>            
	        			<li class="elt_2" style="cursor: pointer; opacity: 0.6; width: 50%; height: 139px;"><a href="" title="Giao hàng 20KM" id="1310" class="banner_click" target="_blank"><img src="../images/slide/hr2.jpg"></a></li>            
	        		</ul>
	        	</div>

	        </div>
	        
	    </div>
	</div>




	<div id="listproductpage" class="container">
		<div class="wrapper clearfix">
			<div class="main">
				<div class="filterbox clearfix" data-nameascii="may-tinh-xach-tay" data-id="3">
					<div class="lbfiter"><a href="javascript:;">Hiển Thị Kết Qủa<i class="filter-arrow"></i></a></div>
					<ul class="filterorder">
						<li>
							<a href="?column=Price&orderby=DESC" data-sort="gia-cao-den-thap">Giá cao đến thấp</a>
						</li>
						<li>
							<a href="?column=Price&orderby=ASC" data-sort="gia-thap-den-cao">Giá thấp đến cao</a>
						</li>
					</ul>
				</div>
				<div class="box">
					<div class="productbox">
						<?php
										//So san pham / trang
						$size = 21;
						if(isset($_GET["tukhoa"]))
						{
										//Kiem xem co tat ca bao nhieu san pham
							$result= mysql_query("SELECT COUNT(*) FROM ".
								"(SELECT * FROM `laptop` WHERE Name like \"%{$_GET["tukhoa"]}%\" ". 
									" UNION ".
									" SELECT * FROM `laptop` WHERE Feature like \"%{$_GET["tukhoa"]}%\" ". 
									" UNION ".
									" SELECT * FROM `laptop` WHERE Warrantee like \"%{$_GET["tukhoa"]}%\") ".
							"AS A",$connect);
						}
						elseif (isset($_GET["Brand"]))
												//Kiem xem co tat ca bao nhieu san pham
							$result= mysql_query("select count(*) from laptop where Brand=\"".$_GET["Brand"]."\"",$connect);
						else
												//Kiem xem co tat ca bao nhieu san pham
							$result= mysql_query("select count(*) from laptop",$connect);
						
						$row= mysql_fetch_array($result);
						$tongsosanpham = $row[0];
										//Tinh xem co bao nhieu trang
						$tongsotrang = ceil($tongsosanpham/$size);
						?>
						<!--List Product Here-->
						<?php include("products-list.php"); ?>	
					</div>
				</div>
				<div>
						<?php						
						for($i = 1;$i<= $tongsotrang; $i++)
						{ ?>
								<a type="button" class="btn btn-warning" <?php echo "href=\"?trang=$i\"";?>>
								Trang <?php echo $i; ?>
								</a>
								
						<?php
						}
						?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Container -->
	<!-- Social button -->
	<!-- End Social buttons -->
	<!-- Footer -->
	<footer class="footer">
		<div class="newsletter">
			<div class="wrapper clearfix">
				<div class="left form">
					<form id="regiterPromotionEmail">
						<p>
							<span>Đăng ký để nhận tin khuyến mãi:</span>
							<input type="text" class="text validate[required,minSize[6]]" name="name" placeholder="Họ và tên">
							<input type="text" class="text validate[required,custom[email],minSize[6]]" name="email" placeholder="Email">
							<input type="submit" class="submit" value="Xác nhận">
						</p>
					</form>
				</div>
				<div class="right support">
					<div class="support-info" style="display:inline-block; margin:0 5px; text-align: left;">
						<p>
							Tư vấn miễn phí:
						</p>
						<p class="phone">19001234</p>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix wrapper">
			<address class="text-right adress">
				<span>Bài tập lớn môn Lập trình web</span> - Nhóm 11<br>
			</address>
		</div>
	</footer>
	<!-- End Footer -->
	</div>
	</body>
	</html>