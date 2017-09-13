<?php
	session_start();
	if($_POST['name']=='Apple iPhone 7 (Black, 32GB) by Apple')
	{
		$a=$_POST['key'];
		$_SESSION[$_POST['array_name']][$a]='removed';
    	//unset($_SESSION[$_POST['array_name']][$a]);
	}
	if($_POST['name']=='Coolpad Note 5 (Space Grey, 32 GB) by Coolpad')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';

	}
	if($_POST['name']=='Lenovo Z2 Plus (Black, 64GB) by Lenovo')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Samsung On5 Pro (Gold) by Samsung')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Moto G5s Plus (Lunar Grey, 64GB) by Motorola')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='SanDisk Cruzer Blade 32GB USB Flash Drive by Copper')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Apple iPod Shuffle MKMJ2HN/A 2GB Music Player (Space Grey) by Apple')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Apple MacBook Pro MJLQ2HN/A 15-inch Laptop (Core i7/16GB/256GB/Mac OS/Integrated Graphics) by MacSafe')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Apple MacBook Pro MLW72HN/A Laptop 2016 (Core i7-2.6GHz/16GB/256GB/MacOS Sierra/2GB Graphic/Touch Bar),Silver by Apple')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='Omen by HP - AX250TX - 15.6-inch Laptop (7th Gen Core i7-7700/16GB/1TB + 128 GB SSD /Nvidia GeForce 1050 TX GTX 4GB Graphics/ Windows 10 Home), Black With  MS Office 2016 H & S edition by HP')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='HP Pavilion17 17.3 Inches Laptop(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB/Windows 10/Nvidoa),Silver by AC Adapter Included')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	if($_POST['name']=='HP Pavilion 15-ab522TX 15.6-inch Laptop (Core i5 6200U/8 GB/1TB/Windows 10 Home/4GB Graphics), Natural Silver by HP')
	{
		$a=$_POST['key'];
    	$_SESSION[$_POST['array_name']][$a]='removed';
	}
	header('Location: cart.php');
	
?>