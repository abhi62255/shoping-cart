
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
			<div style=" float:left; height:600px; width:520px;">
				<img src="images/51xkb92bDrL._SL1024_.jpg"  style="width: 350px; height: 550px; margin-left:80px; margin-top:20px" />
			</div>
			<div style="float:right; height:600px; width:700px;">
				<h2>Apple iPhone 7 (Black, 32GB)</h2><hr color="#CCCCCC" style="margin-top:-15px;" />
				<p>
					<span style="color:#999999; font-size: small; padding-left: 20px; ">M.R.P.:&#x20b9;<strike>56,200.00</strike></span><br />
					<span style="color:#999999; font-size: small; padding-left: 30px;">Price:</span><span style="color:#B12704; font-size: larger;"> &#x20b9;46,999.00</span><span style="font-weight:bold; font-size: medium; font-family: monospace;">&nbsp;&nbsp;FREE Delivery</span><br />
					<span style="color:#999999; font-size: small;">You Save:</span>	<span style="color:#B12704; font-size: small;">&#x20b9;9,201.00 (16%)</span><br />
					<span style="color:#999999; font-family: monospace; padding-left: 60px;">Inclusive of all taxes</span><br />
					<span style="font-weight:bold; font-family: monospace;">EMI</span> <span style="font-family: monospace;">starts at &#x20b9;2,234 per month.</span><br />
					<span style="color:#009900; font-weight: bold;">In stock.</span><br /><br />
				Sold by <span style="color:#0033FF;">Darshita Electronics</span> (4.4 out of 5 | 11,401 ratings) and <span style="color:#0033FF;">Fulfilled by Amazon.</span><br /> <span style="font-family:'Courier New', Courier, monospace;">Gift-wrap available.</span>
				<form action="selected.php" method="post">
					<input type="hidden" name="mobile" value="Apple iPhone 7 (Black, 32GB) by Apple">
					<input type="hidden" name="price" value="46999">
					<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="mobile1" value="ADD TO CART">
				</form>
				
				<ul style="padding:10px; font-weight:bold;">
					<li style="padding:5px;">12MP primary camera with optical image stabilisation, Quad-LED True Tone flash and Live Photos, 4K video recording at 30 fps and slow-motion video recording in 1080p at 120 fps, 7MP front facing FaceTime HD camera with Retina Flash</li>	
					<li style="padding:5px;">4.7-inch (diagonal) Retina HD 3D Touch capacitive touchscreen display and home button with 1334x750 resolution and wide colour, Splash, water and dust resistant</li>
					<li style="padding:5px;">iOS 10 and iCloud operating system with A10 Fusion chip with integrated M10 motion coprocessor, 32GB internal memory and single Nano-SIM</li>
					<li style="padding:5px;">Non-removable Li-Ion 1960 mAh battery (7.45 Wh) providing talktime up to 14 hours on 3G network</li>
					<li style="padding:5px;">1 year manufacturer warranty for device and in-box accessories including batteries from the date of purchase</li>			
				</ul>
				</p>
			</div>
		</div>
<!--Information table-->
	
	</div>
	
<div style="height:400px; background-color:#FFFFFF; width: 1247px; margin-top: -300px;">
	<p>
		<span style="color:#C60; font-weight:bold; padding-left:20px;">Apple iPhone 7 Mobile Phone Information</span><br>
          <span style="color:#999999; font-size:12px; padding-left:20px;">Colour: Black | Size: 32 GB</span><br><br>
		  <span style="padding-left:30px; font-weight:bold;">Technical Details</span>
	</p>
	<table border="1" style="border-collapse:collapse;">
		<tr><th>OS</th><td>iOS 10.0.1</td><th>Wireless communication technologies</th><td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot, bluetooth v4.2, A-GPS, GLONASS, USB v2.0, reversible connector</td></tr>
		<tr><th>RAM</th><td>2 GB</td><th>Connectivity technologies</th><td>GSM / CDMA / HSPA / EVDO / LTE</td></tr>
		<tr><th>Item Weight</th><td>136 g</td><th>Sepical Features</th><td>Splash, water and dust resistant, Touch ID fingerprint sensor, 3D Touch</td></tr>
		<tr><th>Item Model Number</th><td>iPhone 7</td><th>Resolution</th><td>326 ppi</td></tr>
		<tr><th>Product Dimensions</th><td>13.8 x 0.7 x 6.7 cm</td><th>Other camera features</th><td>7MP</td></tr>
		<tr><th>Weight</th><td>136 g</td><th>Form factor</th><td>Touchscreen Phone</td></tr>
		<tr><th>Whats in the box</th><td>EarPods with Lightning Connector (wired), Lightning to 3.5mm Headphone Jack,USB Cable,Adapter</td><th>Battery Power Rating</th><td>1960</td></tr>
	</table>
</div>
	
</body>
</html>
