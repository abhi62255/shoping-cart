<?php
	session_start();
	$_SESSION['k']=0;
	$_SESSION['k2']=0;
	$_SESSION['k3']=0;
	$_SESSION['k4']=0;
	if(isset($_POST['mobile1']))
	{	
		$item="item".$_SESSION['m'];
		$_SESSION[$item]=$_POST['mobile'];
		$_SESSION['itemm']=1;
		$_SESSION['k']=1;
		header('Location: success.php');
	
	}
	if(isset($_POST['pendrive1']))
	{	
		$item2="item2".$_SESSION['m2'];	
		$_SESSION[$item2]=$_POST['pendrive'];
		$_SESSION['itemp']=1;
		$_SESSION['k2']=1;	
		header('Location: success2.php');
	}
	if(isset($_POST['ipod1']))
	{					
		$item3="item3".$_SESSION['m3'];	
		$_SESSION[$item3]=$_POST['ipod'];
		$_SESSION['itemi']=1;
		$_SESSION['k3']=1;	
		header('Location: success3.php');
	}
	if(isset($_POST['laptop1']))
	{					
		$item4="item4".$_SESSION['m4'];
		$_SESSION[$item4]=$_POST['laptop'];
		$_SESSION['iteml']=1;
		$_SESSION['k4']=1;
		header('Location: success4.php');
	}
		
?>