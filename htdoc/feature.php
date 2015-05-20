<?php 
	include("ketnoi.php");
	if(isset($_GET["q"])){
		$pro_id = $_GET["q"];
	}
	else{
		header("Location: /index.php");
	}
	$query= mysql_query("select * from laptop where Id=".$pro_id,$connect); 
	$product_detail=mysql_fetch_array($query);
	?>

<!DOCTYPE html>
<html>
	<head>
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
	</head>
	<body>
		 <h1 class="lb-atten-product">Đặc điểm nổi bật</h1>

		<?php echo $product_detail["Feature"];?>
	</body>
</html>
