
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
				<img src="images/4169WgIpMvL.jpg";  style="width: 418px;height: 266px;margin-left: 42px;margin-top: 62px;" />
			</div>
			<div style="float:right; height:600px; width:700px;">
				<h2>HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver</h2><hr color="#CCCCCC" style="margin-top:-15px;" />
				<p>
					<span style="color:#999999; font-size: small; padding-left: 20px; ">M.R.P.:&#x20b9;\101,500.00</span><br />
					<span style="color:#999999; font-size: small; padding-left: 30px;">Price:</span><span style="color:#B12704; font-size: larger;"> &#x20b9;101,500.00</span><span style="font-weight:bold; font-size: medium; font-family: monospace;">&nbsp;&nbsp;FREE Delivery</span><br />
					<!--<span style="color:#999999; font-size: small;">You Save:</span>	<span style="color:#B12704; font-size: small;">&#x20b9;9,057.00 (8%)</span><br />-->
					<span style="color:#999999; font-family: monospace; padding-left: 60px;">Inclusive of all taxes</span><br />
					<span style="font-weight:bold; font-family: monospace;">EMI</span> starts at &#x20b9; 4,825. No Cost EMI available if you checkout only with this item.<span style="font-family: monospace;"></span><br />
					<span style="color:#009900; font-weight: bold;">In stock.</span><br /><br />
				Sold by <span style="color:#0033FF;"> Cglobal</span> (4.7 out of 5 | 31 ratings) and <span style="color:#0033FF;">Fulfilled by Amazon.</span><br /> <span style="font-family:'Courier New', Courier, monospace;">Gift-wrap available.</span>
				<form action="selected.php" method="post">
				<input type="hidden" name="laptop" value="HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included" >
				<input type="hidden" name="price" value="101500">
					<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;"type="submit" name="laptop1" value="ADD TO CART">
				</form>
				
				<ul style="padding:10px; font-weight:bold;">
					<li style="padding:5px;">Intel i7-6700HQ Quad Core (4 cores) + NVIDIA GeForce GTX 960M</li>	
					<li style="padding:5px;">17.3-inch diagonal FHD IPS UWVA anti-glare WLED-backlit (1920 x 1080) (NO TOUCH)</li>
					<li style="padding:5px;">16GB System Memory / 2TB Hard Drive + 128 GB SSD(M.2)</li>
					<li style="padding:5px;">Tough STAINLESS STEEL HINGES / Windows 10 / Bluetooth(R) 4.2 Combo / USB 3.0 / Card Reader </li>
					<li style="padding:5px;">Bang & Olufsen 4 Speakers / SuperMulti DVD burner / 6-cell 62 WHr Lithium-ion Battery</li>				
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
		<tr><th>Series</th><td>Pavilion</td><th>Screen Size</th><td>17.3 Inches</td></tr>
		<tr><th>Form Factor</th><td>compact_flash</td><th>Screen resolution</th><td>1920x1080</td></tr>
		<tr><th>Graphics Card Ram Size	</th><td>4 GB</td><th>Maximum Display Resolution</th><td>1080p Full HD</td></tr>
		<tr><th>RAM Size</th><td>16 GB</td><th>Item Weight</th><td>3.2 KG</td></tr>
		<tr><th>Hard Drive Size</th><td>2 TB, 128 GB SSD</td><th>Processor Type</th><td>Core i7</td></tr>
		<tr><th>Processor Count</th><td>4</td><th>Processor Speed</th><td>2.6 GHz</td></tr>
	</table>
</div>
	
</body>
</html>
