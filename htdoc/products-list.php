<?php 
	include("ketnoi.php");
	$trang =1;
	if(isset($_GET["trang"])){
		$trang = $_GET["trang"];
	}
	else{
		$trang =1;
	}
	//$start = ($trang -1) * $size + 1;
	$start = ($trang -1) * $size;
	//Neu khong co dong nay se bi mat san pham cuoi cung trong lst sp
	if($start>1){
		$start -= -1;
	}
	$orderby="";
	//Sap xep theo gia
	if(isset($_GET["column"]))
	{
		$orderby = " order by ".$_GET["column"]." ".$_GET["orderby"];
	}
	
	//Truong hop co tukhoa tim kiem
	if(isset($_GET["tukhoa"]))
	{
		$query=mysql_query("SELECT * FROM `laptop` WHERE Name like \"%{$_GET["tukhoa"]}%\" ". 
										" UNION ".
										" SELECT * FROM `laptop` WHERE Feature like \"%{$_GET["tukhoa"]}%\" ". 
										" UNION ".
										" SELECT * FROM `laptop` WHERE Warrantee like \"%{$_GET["tukhoa"]}%\" ".
										" $orderby ".
										" limit $start, $size ",$connect);
	}
	else
	{
		$table_name = "laptop";
		if(isset($_GET["type"]))
			$table_name = $_GET["type"];
		
		if (isset($_GET["Brand"]))
		$query=mysql_query( "select * from ".$table_name." where Brand = \"". $_GET["Brand"]."\" $orderby limit $start, $size",$connect); 
	else
	$query=mysql_query( "select * from ".$table_name." $orderby limit $start, $size ",$connect); 
	}
	while($row=mysql_fetch_array($query)){ 
	?>
<div class="productlist">
	<ul>
		<li class="product">
			<a href="products_detail.php?id=<?php echo $row["Id"]?>" >
				<span class="badge">
				</span>
				<section class="wrap">
					<figure class="image"> <img src="<?php echo $row["Img"] ?>"  alt="<?php echo $row["Name"]; ?>" /> </figure>
					<div class="info">
						<div class="topinfo">
							<div class="namewrap">
								<h3 class="name"><?php echo $row["Name"] ?></h3>
							</div>
							<div class="price">
								<?php echo $row[ "Price"] ?><span class="symbol">VNĐ</span> 
							</div>
						</div>
						<div class="description">
							<div class="promotion-des">
								<p>Đặt ngay tặng kèm</p>
							</div>
							<?php echo $row[ "Promotion"] ?>
							<div class="promotion-des">
								<p>Chi Tiết Sản Phẩm</p>
							</div>
							<?php echo $row[ "Feature"] ?>
						</div>
					</div>
				</section>
			</a>
		</li>
	</ul>
</div>
<?php } ?>