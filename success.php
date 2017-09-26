<?php
	session_start();
	$_SESSION['m']=$_SESSION['m']+1;
	$_SESSION['su']=1;
	if($_SESSION['now']=='Apple iPhone 7 (Black, 32GB) by Apple')
		header('Location: Apple iPhone 7 (Black, 32GB) by Apple.php');
	if($_SESSION['now']=='Coolpad Note 5 (Space Grey, 32 GB) by Coolpad')
		header('Location: Coolpad Note 5 (Space Grey, 32 GB) by Coolpad.php');
	if($_SESSION['now']=='Lenovo Z2 Plus (Black, 64GB) by Lenovo')
		header('Location: Lenovo Z2 Plus (Black, 64GB) by Lenovo.php');
	if($_SESSION['now']=='Moto G5s Plus (Lunar Grey, 64GB) by Motorola')
		header('Location: Moto G5s Plus (Lunar Grey, 64GB) by Motorola.php');
	if($_SESSION['now']=='Samsung On5 Pro (Gold) by Samsung')
		header('Location: Samsung On5 Pro (Gold) by Samsung.php');	
	


	
?>
