<?php
	if(isset($_POST['submit']))
	{	
		$username=$_POST['name'];
		$password=$_POST['password'];
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('cart',$con);
		$result=mysql_query("select * from cus_details where email='$username' && password='$password'");
		if(mysql_num_rows($result)==1)
		{
			if(isset($_POST['remember']))
			{
				setcookie('username',$_POST['name'],time()+60*60*24);
				setcookie('password',$_POST['password'],time()+60*60*24);
				
			}
			else
			{
				setcookie('username',$_POST['name'],false);
				setcookie('password',$_POST['password'],false);
			}
			header('Location: index.php');
		}
		else
		{
			header('Location: login.php');
		}
	}
?>
		
