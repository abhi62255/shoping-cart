
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
				<img src="images/61x2-N8ea+L._SL1100_.jpg";  style="width: 437px;height: 300px;margin-left: 42px;margin-top:20px;" />
			</div>
			<div style="float:right; height:600px; width:700px;">
				<h2>SanDisk Cruzer Force 16GB USB Flash Drive</h2><hr color="#CCCCCC" style="margin-top:-15px;" />
				<p>
					<span style="color:#999999; font-size: small; padding-left: 20px; ">M.R.P.:&#x20b9;<strike>590.00</strike></span><br />
					<span style="color:#999999; font-size: small; padding-left: 30px;">Price:</span><span style="color:#B12704; font-size: larger;"> &#x20b9;582.00</span><span style="font-weight:bold; font-size: medium; font-family: monospace;">&nbsp;&nbsp;FREE Delivery</span><br />
					<span style="color:#999999; font-size: small;">You Save:</span>	<span style="color:#B12704; font-size: small;">&#x20b9;8.00 (1%)</span><br />
					<span style="color:#999999; font-family: monospace; padding-left: 60px;">Inclusive of all taxes</span><br />
					<span style="font-weight:bold; font-family: monospace;">Cash on Delivery </span> <span style="font-family: monospace;">eligible.</span><br />
					<span style="color:#009900; font-weight: bold;">In stock.</span><br /><br />
				Sold by <span style="color:#0033FF;">  Red Store</span> (4.4 out of 5 | 24 ratings) and <span style="color:#0033FF;">Fulfilled by Amazon.</span><br /> <span style="font-family:'Courier New', Courier, monospace;">Gift-wrap available.</span>
				<form action="selected.php" method="post">
				<input type="hidden" name="pendrive" value="SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING" >
				<input type="hidden" name="price" value="582">
					<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;"type="submit" name="pendrive1" value="ADD TO CART">
				</form>
				
				<ul style="padding:10px; font-weight:bold;">
					<li style="padding:5px;">Capacity: 16 GB</li>	
					<li style="padding:5px;">Compatibility: USB 2.0</li>
					<li style="padding:5px;">Stores large HD video, music</li>
					<li style="padding:5px;">Durable metal casing</li>
					<li style="padding:5px;">SanDisk Memory Zone application (available on Google Play) lets you easily manage your photos and videos</li>	
					<li style="padding:5px;">Portable flash drive fits in a bag or pocket</li>	
					<li style="padding:5px;">Share your work files between computers with ease</li>			
				</ul>
				</p>
			</div>

		</div>
<!--Information table-->
	
	</div>
	
<div style="height:292px; background-color:#FFFFFF; width: 1247px; margin-top: -390px;">
	<p>
		<span style="color:#C60; font-weight:bold; padding-left:20px;">SanDisk Cruzer Force 16GB USB Pen Drive Information</span><br>
		<span style="color:#999999; font-size:12px; padding-left:20px;">Size: 16 GB</span><br><br>
		  <span style="padding-left:30px; font-weight:bold;">Technical Details</span>
	</p>
	<table border="1" style="border-collapse:collapse;">
		<tr><th>BRAND</th><td>SanDisk</td><th>Item model number</th><td>SDCZ71-016G-B35</td></tr>
		<tr><th>Weight</th><td>10 g</td><th>RAM Size</th><td>32 GB</td></tr>
		<tr><th>color</th><td>Metallic</td><th>Hardware Platform</th><td>PC, Mac</td></tr>
		<tr><th>Item Height</th><td>12 Millimeters</td><th>Computer Memory Type</th><td>DDR3 SDRAM</td></tr>
		<tr><th>Item Width</th><td>7 Millimeters</td><th>Product Dimensions</th><td>3.4 x 0.7 x 1.2 cm</td></tr>
	</table>
</div>
	
</body>
</html>
