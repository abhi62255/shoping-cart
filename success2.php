<?php
	session_start();
	if( empty($_SESSION['item2'.$_SESSION['m2']]))
	{
		echo "no item selected";
	}
	else
	{
		echo"item enter successful";
	}
	$_SESSION['m2']=$_SESSION['m2']+1;
?>

<html>
<body>
	<a href="home.php">HOME</a>
</body>
</html>