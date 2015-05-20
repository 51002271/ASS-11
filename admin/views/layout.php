<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script  type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>

<link href="<?php echo base_url;?>public/admin/styles/admin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url;?>public/admin/styles/admin-white.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url;?>public/admin/styles/styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo base_url."public/images/favicon.ico" ;?>" />
<?php 
	loadview("scripts");
?>
</head>

<body>
	<div id="wrapper">
		<?php loadview("header",$data); ?>
        <?php loadview("content",$data); ?>
    </div>
    	<?php loadview("bottom",$data); ?>
</body>
</html>