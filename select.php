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
						<a href="Apple iPhone 7 (Black, 32GB) by Apple.php">Apple iPhone 7 (Black, 32GB) by Apple</a><br>
						<a href="Coolpad Note 5 (Space Grey, 32 GB) by Coolpad.php">Coolpad Note 5 (Space Grey, 32 GB) by Coolpad</a><br>
						<a href="Lenovo Z2 Plus (Black, 64GB) by Lenovo.php">Lenovo Z2 Plus (Black, 64GB) by Lenovo</a><br>
						<a href="Samsung On5 Pro (Gold) by Samsung.php">Samsung On5 Pro (Gold) by Samsung</a><br>
						<a href="Moto G5s Plus (Lunar Grey, 64GB) by Motorola.php">Moto G5s Plus (Lunar Grey, 64GB) by Motorola</a><br>
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
						<a href="Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)">Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)</a><br>
						<a href="SanDisk Cruzer Blade 32GB USB Flash Drive by Copper">SanDisk Cruzer Blade 32GB USB Flash Drive by Copper</a><br>
						<a href="SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk">SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk</a><br>
						<a href="SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING">SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING</a><br>
						<a href="Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB">Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB</a><br>
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
						<a href="Apple iPod Shuffle MKMJ2HNA 2GB Music Player (Space Grey) by Apple">Apple iPod Shuffle MKMJ2HNA 2GB Music Player (Space Grey) by Apple</a><br>
						<a href="Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha">Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha</a><br>
						<a href="Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple">Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple</a><br>
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
						<a href="Apple MacBook Pro MJLQ2HNA 15-inch Laptop  by MacSafe">Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe</a><br>
						<a href="Apple MacBook Pro MLW72HNA Laptop 2016 Silver by Apple">Apple MacBook Pro MLW72HN/A Laptop 2016 (Core i7-2.6GHz/16GB/256GB/MacOS Sierra/2GB Graphic/Touch Bar),Silver by Apple</a><br>
						<a href="Omen by HP - AX250TX - 15.6-inch Laptop Black With  MS Office 2016 H & S edition by HP">Omen by HP - AX250TX</a><br>
						<a href="HP Pavilion17 17.3 Inches Laptop,Silver by AC Adapter Included">HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included</a><br>
						<a href="HP Pavilion 15-ab522TX 15.6-inch Laptop Natural Silver by HP">HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP</a><br>
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