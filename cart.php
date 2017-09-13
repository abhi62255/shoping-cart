<?php
	session_start();
	include 'test.php';
	if($_SESSION['itemm']==1)	
	{	
		for($i=1; $i<$_SESSION['m']; $i++)
		{	$_SESSION['key']=0;
			foreach( (array) $_SESSION['item'.$i] as $var)
			{
				$_SESSION['array_name']='item'.$i;
				$_SESSION['value']=$var;
				call();
				$_SESSION['key']=$_SESSION['key']+1;
			}
		}
	}
	if($_SESSION['itemp']==1)
	{	
		for($i=1; $i<$_SESSION['m2']; $i++)
		{		
			$_SESSION['key']=0;			
			foreach( (array) $_SESSION['item2'.$i] as $var)
			{
				$_SESSION['array_name']='item2'.$i;
				$_SESSION['value']=$var;
				call();
				$_SESSION['key']=$_SESSION['key']+1;
			}
		}
	}
	if($_SESSION['itemi']==1)
	{	
		for($i=1; $i<$_SESSION['m3']; $i++)
		{			
			$_SESSION['key']=0;	
			foreach( (array) $_SESSION['item3'.$i] as $var)
			{
				
				$_SESSION['array_name']='item3'.$i;
				$_SESSION['value']=$var;
				call();
				$_SESSION['key']=$_SESSION['key']+1;
			}
		}
	}
	if($_SESSION['iteml']==1)
	{	
		for($i=1; $i<$_SESSION['m4']; $i++)
		{			
			$_SESSION['key']=0;			
			foreach( (array) $_SESSION['item4'.$i] as $var)
			{
				$_SESSION['array_name']='item4'.$i;
				$_SESSION['value']=$var;
				call();
				$_SESSION['key']=$_SESSION['key']+1;
			}
		}
	}
?>
<html>
<body>
 <a href="home.php">GO HOME</a>
</body>
</html>