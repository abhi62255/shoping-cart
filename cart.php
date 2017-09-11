<?php
	session_start();
	if($_SESSION['itemm']==1)	
	{	
		for($i=1; $i<$_SESSION['m']; $i++)
		{	
			foreach( (array) $_SESSION['item'.$i] as $var)
			{
				$_SESSION['value']=$var;
				header('Location: test.php');
			}
		}
	}
	if($_SESSION['itemp']==1)
	{	
		for($i=1; $i<$_SESSION['m2']; $i++)
		{					
			foreach( (array) $_SESSION['item2'.$i] as $var)
			{
				echo $var."<br>";
			}
		}
	}
	if($_SESSION['itemi']==1)
	{	
		for($i=1; $i<$_SESSION['m3']; $i++)
		{			
			foreach( (array) $_SESSION['item3'.$i] as $var)
			{
				echo $var."<br>";
			}
		}
	}
	if($_SESSION['iteml']==1)
	{	
		for($i=1; $i<$_SESSION['m4']; $i++)
		{					
			foreach( (array) $_SESSION['item4'.$i] as $var)
			{
				echo $var."<br>";
			}
		}
	}
?>
<html>
<body>
 <a href="home.php">GO HOME</a>
</body>
</html>