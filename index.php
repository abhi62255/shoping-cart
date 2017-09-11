<?php
	session_start();
	$_SESSION['itemm']=0;
	$_SESSION['itemp']=0;
	$_SESSION['itemi']=0;		
	$_SESSION['iteml']=0;
	$_SESSION['m']=1;
	$_SESSION['m2']=1;
	$_SESSION['m3']=1;
	$_SESSION['m4']=1;
	$_SESSION['i']=1;
	$_SESSION['i2']=1;
	$_SESSION['i3']=1;
	$_SESSION['i4']=1;
	header('Location: home.php');
	
?>
