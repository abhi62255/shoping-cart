<?php
	session_start();
	if($_POST['name']=='Apple iPhone 7 (Black, 32GB) by Apple')
	{
		$a=$_POST['key'];
		echo $_POST['array_name'],$a;
    	unset($_SESSION[$_POST['array_name']][$a]);
	}
	if($_POST['name']=='Coolpad Note 5 (Space Grey, 32 GB) by Coolpad')
	{
		$a=$_POST['key'];
		echo $_POST['array_name'],$a;
    	unset($_SESSION[$_POST['array_name']][$a]);
	}
	if($_POST['name']=='Lenovo Z2 Plus (Black, 64GB) by Lenovo')
	{
		$a=$_POST['key'];
		echo $_POST['array_name'],$a;
    	unset($_SESSION[$_POST['array_name']][$a]);
	}
	if($_POST['name']=='Samsung On5 Pro (Gold) by Samsung')
	{
		$a=$_POST['key'];
		echo $_POST['array_name'],$a;
    	unset($_SESSION[$_POST['array_name']][$a]);
	}
	if($_POST['name']=='Moto G5s Plus (Lunar Grey, 64GB) by Motorola')
	{
		$a=$_POST['key'];
		echo $_POST['array_name'],$a;
    	unset($_SESSION[$_POST['array_name']][$a]);
	}
	
?>