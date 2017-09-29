<?php
	session_start();
	session_destroy();
	setcookie('username',$_POST['name'],'0');
	setcookie('password',$_POST['password'],'0');
	header('Location: login.php');
	session_destroy();

	echo"SUCCESSFULY LOG OUT";
?>