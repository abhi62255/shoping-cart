<?php
	session_start();
	
	$_SESSION['m2']=$_SESSION['m2']+1;
		header('Location: cart.php');
?>
