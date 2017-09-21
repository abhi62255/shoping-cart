<?php
	session_start();
	$_SESSION['m4']=$_SESSION['m4']+1;
		header('Location: cart.php');
?>