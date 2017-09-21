<?php
	session_start();
	$_SESSION['m3']=$_SESSION['m3']+1;
		header('Location: cart.php');
?>
