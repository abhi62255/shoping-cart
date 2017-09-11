<?php
	session_start();
	if( empty($_SESSION['item3'.$_SESSION['m3']]))
	{
		echo "no item selected";
	}
	else
	{
		echo"item enter successful";
	}
	$_SESSION['m3']=$_SESSION['m3']+1;
?>

<html>
<body>
	<a href="home.php">HOME</a>
</body>
</html>