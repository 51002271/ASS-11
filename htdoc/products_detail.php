			<?php 
			include("ketnoi.php");
			if(isset($_GET["id"])){
				$pro_id = $_GET["id"];
			}
			else{
				header("Location: /index.php");
			}
			$query= mysql_query("select * from laptop where Id=".$pro_id,$connect); 
			$product_detail=mysql_fetch_array($query);
			?>
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
			<link href="..\css\style1.css" rel="stylesheet" />
			<link href="..\css\style2.css" rel="stylesheet" />
			<link href="..\css\style3.css" rel="stylesheet" />
			<link href="..\css\style4.css" rel="stylesheet" />
			
			<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
		
			<script type="text/javascript" src="../js/jssor.js"></script>
			<script type="text/javascript" src="../js/jssor.slider.js"></script>

			<script>
			function showFeature(str) {
			if (str=="") {
				document.getElementById("result").innerHTML="";
				return;
			} 
			if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				} else { // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function() {
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementById("result").innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET","feature.php?q="+str,true);
				xmlhttp.send();
			}
			</script>
			<script>
			function showDetail(str) {
				if (str=="") {
					document.getElementById("result").innerHTML="";
					return;
				} 
				if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				} else { // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function() {
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementById("result").innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET","detail.php?q="+str,true);
				xmlhttp.send();
			}
			</script>

			<script>

			jQuery(document).ready(function ($) {

				var _SlideshowTransitions = [
				//Fade in L
					{$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade out R
					, { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade in R
					, { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade out L
					, { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

				//Fade in T
					, { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade out B
					, { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade in B
					, { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade out T
					, { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

				//Fade in LR
					, { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade out LR
					, { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade in TB
					, { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade out TB
					, { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

				//Fade in LR Chess
					, { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade out LR Chess
					, { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade in TB Chess
					, { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade out TB Chess
					, { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

				//Fade in Corners
					, { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
				//Fade out Corners
					, { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

				//Fade Clip in H
					, { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade Clip out H
					, { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade Clip in V
					, { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
				//Fade Clip out V
					, { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					];

				var options = {
					$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
					$AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
					$PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

					$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
					$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
					$SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

					$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
						$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
						$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
						$TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
						$ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
					},

					$ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
						$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
						$ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					},

					$ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
						$Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
						$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

						$ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
						$SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
						$DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
						$ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
					}
				};

				var jssor_slider1 = new $JssorSlider$("slider1_container", options);
				//responsive code begin
				//you can remove responsive code if you don't want the slider scales while window resizes
				function ScaleSlider() {
					var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
					if (parentWidth)
						jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 700), 300));
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
		
		<style>
			/* jssor slider thumbnail navigator skin 01 css */
			/*
			.jssort01 .p            (normal)
			.jssort01 .p:hover      (normal mouseover)
			.jssort01 .p.pav        (active)
			.jssort01 .p.pdn        (mousedown)
			*/

			.jssort01 {
				position: absolute;
				/* size of thumbnail navigator container */
				width: 800px;
				height: 100px;
			}

				.jssort01 .p {
					position: absolute;
					top: 0;
					left: 0;
					width: 72px;
					height: 72px;
				}

				.jssort01 .t {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					border: none;
				}

				.jssort01 .w {
					position: absolute;
					top: 0px;
					left: 0px;
					width: 100%;
					height: 100%;
				}

				.jssort01 .c {
					position: absolute;
					top: 0px;
					left: 0px;
					width: 68px;
					height: 68px;
					border: #000 2px solid;
					box-sizing: content-box;
					background: url(../images/icon/t01.png) -800px -800px no-repeat;
					_background: none;
				}

				.jssort01 .pav .c {
					top: 2px;
					_top: 0px;
					left: 2px;
					_left: 0px;
					width: 68px;
					height: 68px;
					border: #000 0px solid;
					_border: #fff 2px solid;
					background-position: 50% 50%;
				}

				.jssort01 .p:hover .c {
					top: 0px;
					left: 0px;
					width: 70px;
					height: 70px;
					border: #fff 1px solid;
					background-position: 50% 50%;
				}

				.jssort01 .p.pdn .c {
					background-position: 50% 50%;
					width: 68px;
					height: 68px;
					border: #000 2px solid;
				}

				* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
					/* ie quirks mode adjust */
					width /**/: 72px;
					height /**/: 72px;
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

						<div class="container" id="productdetailpage">
							<div class="wrapper clearfix">
								<div class="inner">
									<div class="" style="float:left;width:900px;">
										<div class="" >
										
										
											 <div id="slider1_container" style="position: relative; top: 0px; left: 70px; width: 700px;
	height: 556px; background: #191919; overflow: hidden;">

	<!-- Loading Screen -->
	<div u="loading" style="position: absolute; top: 0px; left: 0px;">
		<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
			background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
		</div>
		<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
			top: 0px; left: 0px;width: 100%;height:100%;">
		</div>
	</div>

	<!-- Slides Container -->
	<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 456px; overflow: hidden;">
		<div>
			<img u="image" src="../images/slide-detail/h1.jpg" />
			<img u="thumb" src="../images/slide-detail/h1.jpg" />
		</div>
		<div>
			<img u="image" src="../images/slide-detail/h2.jpg" />
			<img u="thumb" src="../images/slide-detail/h2.jpg" />
		</div>
		<div>
			<img u="image" src="../images/slide-detail/h3.jpg" />
			<img u="thumb" src="../images/slide-detail/h3.jpg" />
		</div>
		<div>
			<img u="image" src="../images/slide-detail/h4.jpg" />
			<img u="thumb" src="../images/slide-detail/h4.jpg" />
		</div>
		<div>
			<img u="image" src="../images/slide-detail/h2.jpg" />
			<img u="thumb" src="../images/slide-detail/h2.jpg" />
		</div>
	</div>
	
  

	<!-- Arrow Left -->
	<span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
	</span>
	<!-- Arrow Right -->
	<span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
	</span>
 


	<!-- thumbnail navigator container -->
	<div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
		<!-- Thumbnail Item Skin Begin -->
		<div u="slides" style="cursor: default;">
			<div u="prototype" class="p">
				<div class=w><div u="thumbnailtemplate" class="t"></div></div>
				<div class=c></div>
			</div>
		</div>
		<!-- Thumbnail Item Skin End -->
	</div>
   
</div>

										</div>
										<div class="tabs">
											<dl class="tabs-title clearfix">
												<dd><a onclick="showFeature(<?php echo $product_detail["Id"];?>)" data-href="#panel2-2"><i class="icon-detail"></i>Chi tiết</a></dd>
												<dd><a onclick="showDetail(<?php echo $product_detail["Id"];?>)" data-href="#panel2-3"><i class="icon-config"></i>Thông số kỹ thuật</a></dd>
												<dd><a href="" data-href="#panel2-6"><i class="icon-driver"></i>Driver &amp; Software</a></dd>

											</dl>
											<div class="tabs-content">
												<div class="atten-product">
													<div id="result"></div>


												</div>
											</div>
										</div>
									

									

								
									</div>
										<div class="productdetailinfo" style="float:left;">  

											<div class="price-box">
												<div class="price clearfix">
													<div class="price-product-box">
														<span class="price-product">
															<?php echo $product_detail["Price"];?>
														</span><span class="symbol">đ</span>
													</div>
												</div>
											</div>



											<div class="info-promotion">
												<div class="other-infor-product">
													<p style="font-size: 14px; line-height: 24px; color: red; font-family:tahoma,geneva,sans-serif;">Đặt ngay tặng kèm:</p>

													<ul>
														<li style="font-size: 14px; line-height: 24px; color: red; font-family:tahoma,geneva,sans-serif;">Tặng Balo/túi Máy tính xách tay</li>
														<li style="font-size: 14px; line-height: 24px; color: red; font-family:tahoma,geneva,sans-serif;">Voucher <b>1.400.000đ</b> mua Combo Office</li>
														<li style="font-size: 14px; line-height: 24px; color: red; font-family:tahoma,geneva,sans-serif;">Hoàn tiền từ <b>100.000đ</b> đến <b>12.000.000đ&nbsp;</b>duy nhất <a href="" target="_blank"><span style="color:#FF0000;"><u>tại đây</u></span></a></li>
													</ul>

													<p class="promotion-quantity">*** Chỉ còn 7 khuyến mại trong ngày</p>
												</div>
											</div>
											<div class="orderwrap">
												<ul>
													<li class="ordernow tworow">
														<a href="#" class="order-product" data-id="8508" title="Đặt ngay" orderdelivery="1">Đặt ngay
															<div class="panelDiscount"></div>
															<div class="panelNote note-button">
																<span>( Tư vấn miễn phí, không mua không sao )</span>
															</div>
														</a>
													</li>
													<li class="orderbyinstallment"><a href="" title="Trả góp">Trả góp
															<p class="note-button">( từ 586.000 / tháng )</p>
														</a>
													</li>
												</ul>
												<div class="other-order">
													<div class="other-order-box">
														<a href="javascript:;" class="orderphone show-buy-on-shop" data-id="8508" title="Tư vấn miễn phí">Tư vấn<br>
															miễn phí
														</a>
													</div>
													<div class="other-order-box">
														<a href="javascript:;" class="orderconsult" onclick="_sbzq.push(['expandWidget']);">Hỗ trợ<br>
															trực tuyến
														</a>
													</div>
												</div>
											</div>
											<div class="low-price">
												<a href="javascript:;" class="show-report-price">Đề xuất giá thấp hơn</a>
											</div>
											<div class="intro">
												<div class="other-infor-product paddingR30">
													<a href="/shipping" title="Miễn phí giao hàng toàn quốc - Fptshop.com.vn">
														<img src="../images/icon/Giao-hang.gif">
													</a>
													<ul>
														<li style="box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 2px 0px; position: relative;">Cam kết giao hàng&nbsp;<b style="box-sizing: border-box; padding: 0px; margin: 0px;">60 phút</b>&nbsp;trên&nbsp;<b style="box-sizing: border-box; padding: 0px; margin: 0px;">toàn quốc</b></li>
														<li style="box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 2px 0px; position: relative;">Giao hàng&nbsp;<b style="box-sizing: border-box; padding: 0px; margin: 0px;">tận nơi</b>, hài lòng thanh toán</li>
														<li style="box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 2px 0px; position: relative;">Cam kết hàng&nbsp;<b style="box-sizing: border-box; padding: 0px; margin: 0px;">chính hãng</b>, uy tín hàng đầu Việt Nam</li>
														<li style="box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 2px 0px; position: relative;">Bảo hành chính hãng&nbsp;<strong style="box-sizing: border-box; padding: 0px; margin: 0px;">24</strong><b style="box-sizing: border-box; padding: 0px; margin: 0px;">&nbsp;tháng</b></li>
													</ul>

												</div>
											</div>

										</div>
									
									
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
