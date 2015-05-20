<?php
	ob_start();
	session_start();
    require("../libraries/config.php");
	require("../libraries/database.php");
	require("/libraries/user.php");
?>
<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Welcome to Administrator</title>
<link media="screen" rel="stylesheet" type="text/css" href="styles/login.css"  />
<link media="screen" rel="stylesheet" type="text/css" href="styles/login-dark.css"  />
<script language="javascript">
	function checklog(){
		if(document.frmlog.username.value == ""){
			alert("Please enter your name!");
			document.frmlog.username.focus();
			return false;
		}
		if(document.frmlog.password.value == ""){
			alert("Please enter your Password!");
			document.frmlog.password.focus();
			return false;
		}else{
			return true;
		}
	}
</script>
</head>

<body>
	<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
	<div id="wrapper2">
	<div id="wrapper3">
	<div id="wrapper4">
	<span id="login_wrapper_bg"></span>
	
	<div id="stripes">	
		<!--[if !IE]>start login wrapper<![endif]-->
		<div id="login_wrapper">
			<?php
				if(isset($_POST['logon'])){
					$user = $_POST['username'];
					$pass = $_POST['password'];
					$db = new libraries_user;
					$data = $db->check_login($user,$pass);
					if($data == FALSE){
						echo "<span style='color:#F00'>Tài khoản không hợp lệ</span>";
					}else{
						$_SESSION['ses_userid'] = $data['Id'];
						$_SESSION['ses_user'] = $data['Username'];
						$_SESSION['ses_level'] = $data['Level'];
						header("location:index.php");
						die();
					}					
				}
			?>
			<div class="error">
				<div class="error_inner" ">
					<strong>Hệ Thống Quản Trị</strong>
				</div>
			</div>	
			<!--[if !IE]>start login<![endif]-->
			<form action="login.php" method="post" name="frmlog" onsubmit="return checklog();">
				<fieldset>		
					<h1>Log on</h1>
					<div class="formular">
						<span class="formular_top"></span>
						
						<div class="formular_inner">
						
						<label>
							<strong>Username:</strong>

							<span class="input_wrapper">
								<input name="username" type="text" />
							</span>
						</label>
						<label>
							<strong>Password:</strong>
							<span class="input_wrapper">
								<input name="password" type="password" />

							</span>
						</label>
						<label class="inline">
							<input class="checkbox" name="" type="checkbox" value="" />
							Remember me
						</label>	
						<ul class="form_menu">
							<li><span class="button"><span><span><em>Log on</em></span></span><input type="submit" name="logon"/></span></li>
							<li><span class="button"><span><span><a href="">Go back</a></span></span></span></li>
						</ul>
						
						</div>
						
						<span class="formular_bottom"></span>
						
					</div>
				</fieldset>
			</form>
			<!--[if !IE]>end login<![endif]-->
			
			<!--[if !IE]>start reflect<![endif]-->
			<span class="reflect"></span>
			<span class="lock"></span>
			<!--[if !IE]>end reflect<![endif]-->	
		</div>

		<!--[if !IE]>end login wrapper<![endif]-->
	    </div>
		</div>
     	</div>
		</div>	
	</div>
	<!--[if !IE]>end wrapper<![endif]-->
</body>
</html>
<?php
	ob_end_flush();
?>
