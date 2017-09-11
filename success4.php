<?php
	session_start();
	if( empty($_SESSION['item4'.$_SESSION['m4']]))
	{
		echo "no item selected";
	}
	else
	{
		echo"item enter successful";
	}
	$_SESSION['m4']=$_SESSION['m4']+1;
?>

<html>
<body>
	<a href="home.php">HOME</a>
</body>
</html>