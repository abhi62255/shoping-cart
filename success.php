<?php
	session_start();
		$_SESSION['m']=$_SESSION['m']+1;
	header('Location: cart.php');


	
?>
