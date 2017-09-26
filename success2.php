<?php
	session_start();
	
	$_SESSION['m2']=$_SESSION['m2']+1;
	$_SESSION['su']=1;
	if($_SESSION['now']=='SanDisk Cruzer Blade 32GB USB Flash Drive by Copper')
		header('Location: SanDisk Cruzer Blade 32GB USB Flash Drive by Copper.php');
	if($_SESSION['now']=='SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING')
		header('Location: SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING.php');
	if($_SESSION['now']=='SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk')
		header('Location: SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk.php');
	if($_SESSION['now']=='Strontium Ammo 16GB 2.0 USB Pen Drive (Silver)')
		header('Location: Strontium Ammo 16GB 2.0 USB Pen Drive (Silver).php');
	if($_SESSION['now']=='Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB')
		header('Location: Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB.php');	
?>
