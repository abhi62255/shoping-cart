
<?php
		//echo "Apple iPhone 7 (Black, 32GB) by Apple";
		session_start();
?>
<html>
<head>
<title>Untitled Document</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
</head>

<body bgcolor="#CCCCCC">
<div style="background-color:#FFFFFF; height:100px; width:1264px; margin-top:0px; border-radius:10px;">
		<div style="float:left;">
			<img src="images/fellowship-amazon-logo.png"  align="left" align="top" height="100" width="200"/>
		</div>
		<div style="float: right;height: 40px;margin-top: 55px;margin-right: 5px;">
			<h3 align="right" style="margin-right:10px; font-weight:bold;">Welcome Mr. Abhishek &nbsp;&nbsp; <a href="home.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Home&nbsp;&nbsp;</a> <a href="cart.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Cart&nbsp;&nbsp;</a>  <a href="logout.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Log Out</a></h3>
		</div>	
	</div>
	<hr>
<?php
	if($_SESSION['su']==1)
	{
?>
	<div style=" background-color:#FFFFFF; height:18px; width:1264px;">
		<span style=" color:#009900; font-weight:bold; margin-left:500px;">Your Item Added To Cart Successfully</span>
	</div>
	<hr>
<?php
	$_SESSION['su']=0;
	}
?>
	<div style="background-color:#FFFFFF; height:900px;">
	<!-- <form action="selected.php" method="post">
		<input type="hidden" name="mobile[]" value="Apple iPhone 7 (Black, 32GB) by Apple">
		<input type="submit" name="mobile1" value="ADD TO CART">
	</form> -->
		<div style="background-color:#FFFFFF;">
			<div style=" float:left; height:520px; width:520px;">
				<img src="images/41U6lfvHZDL.jpg";  style="width: 418px;height: 266px;margin-left: 42px;margin-top: 62px;" />
			</div>
			<div style="float:right; height:600px; width:700px;">
				<h2>HP HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver</h2><hr color="#CCCCCC" style="margin-top:-15px;" />
				<p>
					<span style="color:#999999; font-size: small; padding-left: 20px; ">M.R.P.:&#x20b9;\60,808.00</span><br />
					<span style="color:#999999; font-size: small; padding-left: 30px;">Price:</span><span style="color:#B12704; font-size: larger;"> &#x20b9;55,990.00</span><span style="font-weight:bold; font-size: medium; font-family: monospace;">&nbsp;&nbsp;FREE Delivery</span><br />
					<span style="color:#999999; font-size: small;">You Save:</span>	<span style="color:#B12704; font-size: small;">&#x20b9;4,818.00 (8%)</span><br />
					<span style="color:#999999; font-family: monospace; padding-left: 60px;">Inclusive of all taxes</span><br />
					<span style="font-weight:bold; font-family: monospace;">EMI</span> starts at &#x20b9; 2,662 No Cost EMI available if you checkout only with this item.<span style="font-family: monospace;"></span><br />
					<span style="color:#009900; font-weight: bold;">In stock.</span><br /><br />
				Sold by <span style="color:#0033FF;"> TabTree</span> (4.6 out of 5 | 90 ratings) and <span style="color:#0033FF;">Fulfilled by Amazon.</span><br /> <span style="font-family:'Courier New', Courier, monospace;">Gift-wrap available.</span>
				<form action="selected.php" method="post">
				<input type="hidden" name="laptop" value="HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP" >
				<input type="hidden" name="price" value="55990">
					<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;"type="submit" name="laptop1" value="ADD TO CART">
				</form>
				
				<ul style="padding:10px; font-weight:bold;">
					<li style="padding:5px;">2.3GHz Intel Core i5 6200U processor</li>	
					<li style="padding:5px;">8GB DDR3 RAM</li>
					<li style="padding:5px;">1TB 5400rpm Serial ATA hard drive</li>
					<li style="padding:5px;">15.6-inchscreen, 4GB Nvidia GeForce 940M graphics</li>
					<li style="padding:5px;">Windows 10 Home, 64Bit operating system</li>				
				</ul>
				</p>
			</div>

		</div>
<!--Information table-->
	
	</div>
	
<div style="height:292px; background-color:#FFFFFF; width: 1247px; margin-top: -390px;">
	<p>
		<span style="color:#C60; font-weight:bold; padding-left:20px;">HP Pavilion17 17.3 Inches Laptop Information</span><br><br />
		<!--<span style="color:#999999; font-size:12px; padding-left:20px;">Model Number: AX250TX</span><br><br>-->
		  <span style="padding-left:30px; font-weight:bold;">Technical Details</span>
	</p>
	<table border="1" style="border-collapse:collapse;">
		<tr><th>BRAND</th><td>HP</td><th>Model</th><td>MJLQ2HN/A</td></tr>
		<tr><th>Series</th><td>Pavilion</td><th>Screen Size</th><td>15.6 Inches</td></tr>
		<tr><th>Form Factor</th><td>compact_flash</td><th>Screen resolution</th><td>1920x1080</td></tr>
		<tr><th>Graphics Card Ram Size	</th><td>4 GB</td><th>Maximum Display Resolution</th><td>1080p Full HD</td></tr>
		<tr><th>RAM Size</th><td>8 GB</td><th>Item Weight</th><td>2.3 KG</td></tr>
		<tr><th>Hard Drive Size</th><td>1 TB</td><th>Processor Type</th><td>Core i5</td></tr>
		<tr><th>Processor Count</th><td>2</td><th>Processor Speed</th><td>2.3 GHz</td></tr>
	</table>
</div>
	
</body>
</html>
