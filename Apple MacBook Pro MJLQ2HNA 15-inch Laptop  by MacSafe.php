
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
				<img src="images/71UqSAcUeaL._SL1500_.jpg";  style="width: 418px;height: 266px;margin-left: 42px;margin-top: 62px;" />
			</div>
			<div style="float:right; height:600px; width:700px;">
				<h2>Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics)</h2><hr color="#CCCCCC" style="margin-top:-15px;" />
				<p>
					<span style="color:#999999; font-size: small; padding-left: 20px; ">M.R.P.:&#x20b9;<strike>154,990.00</strike></span><br />
					<span style="color:#999999; font-size: small; padding-left: 30px;">Price:</span><span style="color:#B12704; font-size: larger;"> &#x20b9;140,875.00</span><span style="font-weight:bold; font-size: medium; font-family: monospace;">&nbsp;&nbsp;FREE Delivery</span><br />
					<span style="color:#999999; font-size: small;">You Save:</span>	<span style="color:#B12704; font-size: small;">&#x20b9;14,025.00 (9%)</span><br />
					<span style="color:#999999; font-family: monospace; padding-left: 60px;">Inclusive of all taxes</span><br />
					<span style="font-weight:bold; font-family: monospace;">Cash on Delivery </span> <span style="font-family: monospace;">eligible.</span><br />
					<span style="color:#009900; font-weight: bold;">In stock.</span><br /><br />
				Sold by <span style="color:#0033FF;">FIRST ENTERPRISES</span> (4.6 out of 5 | 50 ratings) and <span style="color:#0033FF;">Fulfilled by Amazon.</span><br /> <span style="font-family:'Courier New', Courier, monospace;">Gift-wrap available.</span>
				<form action="selected.php" method="post">
					<input type="hidden" name="laptop" value="Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe" >
					<input type="hidden" name="price" value="140875">
					<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;"type="submit" name="laptop1" value="ADD TO CART">
				</form>
				
				<ul style="padding:10px; font-weight:bold;">
					<li style="padding:5px;">Retina display: 15.4-inch (diagonal) LED-backlit display with IPS technology</li>	
					<li style="padding:5px;">2880x1800 resolution at 220 pixels per inch with support for millions of colours</li>
					<li style="padding:5px;">2.2GHz quad-core Intel Core i7 processor (Turbo Boost up to 3.4GHz) with 6MB shared L3 cache</li>
					<li style="padding:5px;">16GB of 1600MHz DDR3L onboard memory, 256GB PCIe-based flash storage</li>
					<li style="padding:5px;">802.11ac Wi-Fi wireless networking; IEEE 802.11a/b/g/n compatible</li>	
					<li style="padding:5px;">Force Touch trackpad for precise cursor control</li>				
				</ul>
				</p>
			</div>

		</div>
<!--Information table-->
	
	</div>
	
<div style="height:292px; background-color:#FFFFFF; width: 1247px; margin-top: -390px;">
	<p>
		<span style="color:#C60; font-weight:bold; padding-left:20px;">Apple MacBook Pro MJLQ2HN/A 15-inch Laptop Information</span><br>
		<!--<span style="color:#999999; font-size:12px; padding-left:20px;">Color: Space Grey</span><br><br>-->
		  <span style="padding-left:30px; font-weight:bold;">Technical Details</span>
	</p>
	<table border="1" style="border-collapse:collapse;">
		<tr><th>BRAND</th><td>Apple</td><th>Model</th><td>MJLQ2HN/A</td></tr>
		<tr><th>Series</th><td>MJLQ2HN/A</td><th>Screen Size</th><td>15.4 Inches</td></tr>
		<tr><th>Form Factor</th><td>compact_flash</td><th>Screen resolution</th><td>2880x1800</td></tr>
		<tr><th>Item Height</th><td>18 Millimeters</td><th>Maximum Display Resolution</th><td>1080p Full HD</td></tr>
		<tr><th>Item Width</th><td>21.2 Millimeters</td><th>Item Weight</th><td>2 KG</td></tr>
		<tr><th>Hard Drive Size</th><td>256 GB</td><th>Processor Type</th><td>Core i7</td></tr>
		<tr><th>Processor Count</th><td>4</td><th>Processor Speed</th><td>2.2 GHz</td></tr>
	</table>
</div>
	
</body>
</html>
