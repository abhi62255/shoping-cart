<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	if(isset($_POST['submit']))
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('cart',$con);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$password=$_POST['password'];
		$result=mysql_query("insert into cus_details(name,number,email,password) values('$name',$number,'$email','$password')");
		if($result)
		{
			header('Location: login.php');
		}	
		else
		echo"try again";
		
		
	}
	else
		echo"not sign up";
	
?>