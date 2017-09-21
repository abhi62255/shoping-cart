<html>
<head>
	<title>test</title>
</head>
<body bgcolor="#CCCCCC">
<div style="background-color:#FFFFFF; height:100px; width:1247px; margin-top:0px; border-radius:5px;">
		<div style="float:left;">
			<img src="images/fellowship-amazon-logo.png"  align="left" align="top" height="100" width="200"/>
		</div>
		<div style="float: right;height: 40px;margin-top: 55px;margin-right: 5px;">
			<h3 align="right" style="margin-right:10px; font-weight:bold;">Welcome Mr. Abhishek  <a href="home.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Home</a>   <a href="logout.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Log Out</a></h3>
		</div>	
	</div>
	<hr>
	<div style="background-color:#FFFFFF;height: 40px;margin-top: -11px; border-radius:5px; width:1247px;">
		<div style="margin-left:10px; margin-top:18px;">
			<h2 style="padding-top:5px;">Shoping Cart</h2>
			<div style="width: 260px;float: right; margin-top:-41px;">
		<span style="font-size: 22px;font-weight: bold;font-family: monospace; margin-left:-57px">Subtotal (<?php echo $_SESSION['no']; ?> items):<span style="color:B12704">&#x20b9;<?php echo $_SESSION['price']; ?></span></span>
	</div>
		</div>
	</div>
	<hr>
<?php
	function call()
	{
?>
<?php
	
	if($_SESSION['value']=='Apple iPhone 7 (Black, 32GB) by Apple')
	{
		$array_nameM1=$_SESSION['array_name'];
		$keyM1=$_SESSION['key'];
?>
	
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/51odjdfuPTL.jpg" align="left" height="100" width="50" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -40px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Apple iPhone 7 (Black, 32GB) by Apple.php" style="text-decoration:none; color:#0066FF;">Apple iPhone 7 (Black, 32GB)</a> </span>by Apple
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>56,200.00</strike></span>
					Price:	 <span style="color:#FF0000;">46,999.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Darshita Electronics 
				(4.4 out of 5 | 11,105 ratings) 
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM1;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM1;  ?> name="key" >
				<input type="hidden" value="Apple iPhone 7 (Black, 32GB) by Apple" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='Coolpad Note 5 (Space Grey, 32 GB) by Coolpad')	
	{
		$array_nameM2=$_SESSION['array_name'];
		$keyM2=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/81TAKGVP7pL._SL1500_.jpg" align="left" height="100" width="50" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -40px;">
				<pre style="font-size: 19px;">
					<span style=" font-weight:bold;"><a href="Coolpad Note 5 (Space Grey, 32 GB) by Coolpad.php" style="text-decoration:none; color:#0066FF;">Coolpad Note 5 (Space Grey, 32 GB)</a></span>by Coolpad
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>11,999.00</strike></span>
					Price:	 <span style="color:#FF0000;">8,999.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by GreenMobiles! 
				(4.5 out of 5 | 7,373 ratings) 
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM2;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM2;  ?> name="key" >
				<input type="hidden" value="Coolpad Note 5 (Space Grey, 32 GB) by Coolpad" name='name'>
				
			</form>

				</pre>
			</div>
			
		</div>
		<hr>
	</div>
<?php
	}
	if($_SESSION['value']=='Lenovo Z2 Plus (Black, 64GB) by Lenovo')	
	{
		$array_nameM3=$_SESSION['array_name'];
		$keyM3=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/71-0MKi0drL._SL1500_.jpg" align="left" height="100" width="50" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -40px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Lenovo Z2 Plus (Black, 64GB) by Lenovo.php" style="text-decoration:none; color:#0066FF;">Lenovo Z2 Plus (Black, 64GB)</a></span>by Lenovo
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>19,999.00</strike></span>
					Price:	 <span style="color:#FF0000;">11,998.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by eTrade Online 
				(4.0 out of 5 | 458 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM3;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM3;  ?> name="key" >
				<input type="hidden" value="Lenovo Z2 Plus (Black, 64GB) by Lenovo" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>

			
<?php
	}
	if($_SESSION['value']=='Samsung On5 Pro (Gold) by Samsung')	
	{
		$array_nameM4=$_SESSION['array_name'];
		$keyM4=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/81mKtZOvUmL._SL1500_.jpg" align="left" height="100" width="50" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -40px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Samsung On5 Pro (Gold) by Samsung.php" style="text-decoration:none;color:#0066FF;">Samsung On5 Pro (Gold) </a></span>by Samsung
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>7,990.00</strike></span>
					Price:	 <span style="color:#FF0000;">7,490.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by STPL Exclusive Online 
				(4.5 out of 5 | 7,276 ratings) 
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM4;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM4;  ?> name="key" >
				<input type="hidden" value="Samsung On5 Pro (Gold) by Samsung" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>

<?php
	}
	if($_SESSION['value']=='Moto G5s Plus (Lunar Grey, 64GB) by Motorola')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/71hLfPtWi4L._SL1200_.jpg" align="left" height="100" width="50" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -40px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Moto G5s Plus (Lunar Grey, 64GB) by Motorola.php" style="text-decoration:none; color:#0066FF;">Moto G5s Plus (Lunar Grey, 64GB)</a> </span>by Motorola
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>16,500.00</strike></span>
					Price:	 <span style="color:#FF0000;">15,999.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Darshita Electronics
				(4.4 out of 5 | 11,141 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Moto G5s Plus (Lunar Grey, 64GB) by Motorola" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='SanDisk Cruzer Blade 32GB USB Flash Drive by Copper')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/71Q8QsmuSAL._SL1417_.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="SanDisk Cruzer Blade 32GB USB Flash Drive by Copper.php" style="text-decoration:none; color:#0066FF;">SanDisk Cruzer Blade 32GB USB Flash Drive</a></span> by Copper
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>990.00</strike></span>
					Price:	 <span style="color:#FF0000;">718.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Cloudtail India 
				(4.3 out of 5 | 90,512 ratings) 
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="SanDisk Cruzer Blade 32GB USB Flash Drive by Copper" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/61wwFOWnEGL._SL1500_.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk.php" style="text-decoration:none; color:#0066FF;">SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive</a></span> by SanDisk
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>1,290.00</strike></span>
					Price:	 <span style="color:#FF0000;">849.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Cloudtail India
				(4.3 out of 5 | 90,584 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/61x2-N8ea+L._SL1100_.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING.php" style="text-decoration:none; color:#0066FF;">SanDisk Cruzer Force 16GB USB Flash Drive</a></span> by MATEL CASING
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>590.00</strike></span>
					Price:	 <span style="color:#FF0000;">582.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Suvidha Mobile
				(4.1 out of 5 | 98 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
		
<?php
	}
	if($_SESSION['value']=='Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/61IQNDSjIQL._SL1500_.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB.php" style="text-decoration:none; color:#0066FF;">Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB</a></span> by Strontium
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>1,699.00</strike></span>
					Price:	 <span style="color:#FF0000;">1,149.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Cloudtail India
				(4.3 out of 5 | 90,560 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
			<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
<?php
	}
	if($_SESSION['value']=='Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/51sSkMlxqgL.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Strontium Ammo 16GB 2.0 USB Pen Drive (Silver).php" style="text-decoration:none; color:#0066FF;">Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)</a></span> by Strontium
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>649.00</strike></span>
					Price:	 <span style="color:#FF0000;">419.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Cloudtail India
				(4.3 out of 5 | 90,593 ratings)
				and Fulfilled by Amazon. Gift-wrap available. 
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
		
<?php
	}
	if($_SESSION['value']=='Apple iPod Shuffle MKMJ2HN/A 2GB Music Player (Space Grey) by Apple')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/21h5V3qDQmL.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Apple iPod Shuffle MKMJ2HNA 2GB Music Player (Space Grey) by Apple.php" style="text-decoration:none; color:#0066FF;">Apple iPod Shuffle MKMJ2HN/A 2GB Music Player</a></span> by Apple
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>4,300.00</strike></span>
					Price:	 <span style="color:#FF0000;">3,809.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by ADVANCE MAX
				(4.2 out of 5 | 108 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Apple iPod Shuffle MKMJ2HN/A 2GB Music Player (Space Grey) by Apple" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/41X+I8ExTlL.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha.php" style="text-decoration:none; color:#0066FF;">Captcha Green Sports Shuffle</a></span> by captcha
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>718.00</strike></span>
					Price:	 <span style="color:#FF0000;">399.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold and fulfilled by ShoppersGallery 
				(4.1 out of 5 | 2,812 ratings)
				
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/31mWIbN1qML.jpg" align="left" height="100" width="75" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -35px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple.php" style="text-decoration:none; color:#0066FF;">Apple 16GB 6th Generation iPod Nano (Space Grey)</a></span> by Apple
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>13,900.00</strike></span>
					Price:	 <span style="color:#FF0000;">12,999.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold and fulfilled by offerbajar
				(4.7 out of 5 | 70 ratings)
				
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/71UqSAcUeaL._SL1500_.jpg" align="left" height="100" width="130" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -90px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Apple MacBook Pro MJLQ2HNA 15-inch Laptop  by MacSafe.php" style="text-decoration:none; color:#0066FF;">Apple MacBook Pro MJLQ2HN/A 15-inch Laptop</a></span> by MacSafe
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>154,900.00</strike></span>
					Price:	 <span style="color:#FF0000;">140,875.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by FIRST ENTERPRISES
				(4.6 out of 5 | 50 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='Apple MacBook Pro MLW72HN/A Laptop 2016 (Core i7-2.6GHz/16GB/256GB/MacOS Sierra/2GB Graphic/Touch Bar),Silver by Apple')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/41q0Oprn2IL.jpg" align="left" height="100" width="130" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -90px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Apple MacBook Pro MLW72HNA Laptop 2016 Silver by Apple.php" style="text-decoration:none; color:#0066FF;">Apple MacBook Pro MLW72HN/A Laptop 2016</a></span> by Apple
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>177,900.00</strike></span>
					Price:	 <span style="color:#FF0000;">176,879.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by J A K S (LLP)
				(4.6 out of 5 | 403 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Apple MacBook Pro MLW72HN/A Laptop 2016 (Core i7-2.6GHz/16GB/256GB/MacOS Sierra/2GB Graphic/Touch Bar),Silver by Apple" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='Omen by HP - AX250TX - 15.6-inch Laptop (7th Gen Core i7-7700/16GB/1TB + 128 GB SSD /Nvidia GeForce 1050 TX GTX 4GB Graphics/ Windows 10 Home), Black With  MS Office 2016 H & S edition by HP')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/71XKYg966RL._SL1500_.jpg" align="left" height="100" width="130" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -90px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="Omen by HP - AX250TX - 15.6-inch Laptop Black With  MS Office 2016 H & S edition by HP.php" style="text-decoration:none; color:#0066FF;">Omen by HP - AX250TX - 15.6-inch Laptop</a></span> by HP
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>116,47.00</strike></span>
					Price:	 <span style="color:#FF0000;">106,990.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Cloudtail India
				(4.3 out of 5 | 90,559 ratings)
				and Fulfilled by Amazon. Gift-wrap available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Omen by HP - AX250TX - 15.6-inch Laptop (7th Gen Core i7-7700/16GB/1TB + 128 GB SSD /Nvidia GeForce 1050 TX GTX 4GB Graphics/ Windows 10 Home), Black With  MS Office 2016 H & S edition by HP" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>

<?php
	}
	if($_SESSION['value']=='HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/41U6lfvHZDL.jpg" align="left" height="100" width="130" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -90px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="HP Pavilion17 17.3 Inches Laptop,Silver by AC Adapter Included.php" style="text-decoration:none; color:#0066FF;">HP Pavilion17 17.3 Inches Laptop</a></span> by HP
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;">101,500.00</span>
					Price:	 <span style="color:#FF0000;">101,500.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by Cglobal
				(4.7 out of 5 | 31 ratings)
				and Fulfilled by Amazon. Gift-wrap not available.
				<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
			
<?php
	}
	if($_SESSION['value']=='HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP')	
	{
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
?>
	<div>
		<div style="background-color:#FFFFFF; height:150px; width:1247px; margin-top:0px; border-radius:5px;">
			<div style="margin-left:10px; padding:21px;">
				<img src="images/4169WgIpMvL.jpg" align="left" height="100" width="130" >
			</div>
			<div style="height: 126px;width: 700;float: left;margin-left: -90px;margin-top: -60px;">
				<pre style="font-size: 19px;">
					<span style="color:#0066FF; font-weight:bold;"><a href="HP Pavilion 15-ab522TX 15.6-inch Laptop Natural Silver by HP.php" style="text-decoration:none; color:#0066FF;">HP Pavilion 15-ab522TX 15.6-inch Laptop</a></span> by HP
					<span style="color:#009900;">In stock</span>
					M.R.P.:  <span style=" font-size:16px;"><strike>60,808.00</strike></span>
					Price:	 <span style="color:#FF0000;">55,5990.00</span> <span style="color:#009900;">FREE Delivery</span>
    
					Gift options not available.
				</pre>
			</div>
			<div style="float: left;height: 126px;margin-top: -30px;font-size: 18px;margin-left: -90px;font-weight: bold;">
				<pre>
				Sold by TabTree
				(4.6 out of 5 | 99 ratings)
				and Fulfilled by Amazon. Gift-wrap available.	
			<form action="delete.php" method="post">
				<input style="height:25px; width:100px; font-weight:bold; background-color:#0099FF; color:#FFFFFF;" type="submit" name="submit" value="REMOVE">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP" name='name'>
			</form>
				</pre>
			</div>
			
		</div>
		<hr>
	</div>
	
<?php
	}
?>
<?php
}
?>
	</body>
	</html>