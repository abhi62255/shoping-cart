<?php
	session_start();
	echo $_SESSION['m'];
	if( empty($_SESSION['item'.$_SESSION['m']]))
	{
		echo "no item selected";
	}
	else
	{
		echo"item enter successful";
	}
	$_SESSION['m']=$_SESSION['m']+1;
	
?>

<html>
<body>
	<a href="home.php">HOME</a>
</body>
</html>