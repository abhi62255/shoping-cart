<?php
	session_start();	
	if(isset($_POST['submi']))
	{
			echo"welcome";
			$item=$_POST["item"];
			switch($item)
			{
				case 1:
						echo"MOBILES";
?>
						<html>
						<body>
							<form action="selected.php"; method="post">
								<input type="checkbox" name="mobile[]" value="Apple iPhone 7 (Black, 32GB) by Apple">Apple iPhone 7 (Black, 32GB) by Apple<br>
								<input type="checkbox" name="mobile[]" value="Coolpad Note 5 (Space Grey, 32 GB) by Coolpad" >Coolpad Note 5 (Space Grey, 32 GB) by Coolpad<br>
								<input type="checkbox" name="mobile[]" value="Lenovo Z2 Plus (Black, 64GB) by Lenovo" >Lenovo Z2 Plus (Black, 64GB) by Lenovo<br>
								<input type="checkbox" name="mobile[]" value="Samsung On5 Pro (Gold) by Samsung">Samsung On5 Pro (Gold) by Samsung<br>
								<input type="checkbox" name="mobile[]" value="Moto G5s Plus (Lunar Grey, 64GB) by Motorola" >Moto G5s Plus (Lunar Grey, 64GB) by Motorola<br>
								<input type="submit" name="mobile1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;
				case 2:
						echo"PENDRIVE";
?>
						<html>
						<body>
							<form action="selected.php" method="post">
								<input type="checkbox" name="pendrive[]" value="SanDisk Cruzer Blade 32GB USB Flash Drive by Copper" >SanDisk Cruzer Blade 32GB USB Flash Drive by Copper<br>
								<input type="checkbox" name="pendrive[]" value="SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk" >SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk<br>
								<input type="checkbox" name="pendrive[]" value="SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING" >SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING<br>
								<input type="checkbox" name="pendrive[]" value="Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB" >Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB <br>
								<input type="checkbox" name="pendrive[]" value="Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)" >Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)<br>
								<input type="submit" name="pendrive1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;
				case 3:
						echo"IPOD";
?>
						<html>
						<body>
							<form action="selected.php" method="post">
								<input type="checkbox" name="ipod[]" value="Apple iPod Shuffle MKMJ2HN/A 2GB Music Player (Space Grey) by Apple" >Apple iPod Shuffle MKMJ2HN/A 2GB Music Player (Space Grey) by Apple<br>
								<input type="checkbox" name="ipod[]" value="Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha" >Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha<br>
								<input type="checkbox" name="ipod[]" value="Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple" >Apple 16GB 6th Generation iPod Nano (Space Grey) by Appl<br>
								<input type="submit" name="ipod1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;
				case 4:
						echo"LAPTOP";
?>
						<html>
						<body>
							<form action="selected.php" method="post">
								<input type="checkbox" name="laptop[]" value="Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe" >Apple MacBook Pro MJLQ2HN/A 15-inch Laptop by MacSafe <br>
								<input type="checkbox" name="laptop[]" value="Apple MacBook Pro MLW72HN/A Laptop 2016 (Core i7-2.6GHz/16GB/256GB/MacOS Sierra/2GB Graphic/Touch Bar),Silver by Apple" >Apple MacBook Pro MLW72HN/A Laptop 2016,Silver by Apple<br>
								<input type="checkbox" name="laptop[]" value="Omen by HP - AX250TX - 15.6-inch Laptop (7th Gen Core i7-7700/16GB/1TB + 128 GB SSD /Nvidia GeForce 1050 TX GTX 4GB Graphics/ Windows 10 Home), Black With  MS Office 2016 H & S edition by HP" >Omen by HP - AX250TX<br>
								<input type="checkbox" name="laptop[]" value="HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included" >HP Pavilion17 17.3 Inches Laptop,Silver by AC Adapter Included<br>
								<input type="checkbox" name="laptop[]" value="HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP" >HP Pavilion 15-ab522TX 15.6-inch Laptop,Natural Silver by HP<br>
								<input type="submit" name="laptop1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;	
			}
			
			
	}
	else
	{
		header('Location: home.html');
	}
?>