<?php
	session_start();
	$_SESSION['m4']=$_SESSION['m4']+1;
	$_SESSION['su']=1;
	if($_SESSION['now']=='Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe')
		header('Location: Apple MacBook Pro MJLQ2HNA 15-inch Laptop  by MacSafe.php');
	if($_SESSION['now']=='Apple MacBook Pro MLW72HN/A Laptop 2016 (Core i7-2.6GHz/16GB/256GB/MacOS Sierra/2GB Graphic/Touch Bar),Silver by Apple')
		header('Location: Apple MacBook Pro MLW72HNA Laptop 2016 Silver by Apple.php');
	if($_SESSION['now']=='HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP')
		header('Location: HP Pavilion 15-ab522TX 15.6-inch Laptop Natural Silver by HP.php');
	if($_SESSION['now']=='HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included')
		header('Location: HP Pavilion17 17.3 Inches Laptop,Silver by AC Adapter Included.php');
	if($_SESSION['now']=='Omen by HP - AX250TX - 15.6-inch Laptop (7th Gen Core i7-7700/16GB/1TB + 128 GB SSD /Nvidia GeForce 1050 TX GTX 4GB Graphics/ Windows 10 Home), Black With  MS Office 2016 H & S edition by HP')
		header('Location: Omen by HP - AX250TX - 15.6-inch Laptop Black With  MS Office 2016 H & S edition by HP');	
?>