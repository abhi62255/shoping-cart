<?php
	if(isset($_COOKIE['username']))
	{
		header('Location: index.php');
	}
	else
	{
?>
<html>
<head>
<title>time stamp</title>	
</head>


<body>
	<form action='validation.php' method='post'>
		<input type='text' name='name' placeholder='Email'>
		<input type='password' name='password' placeholder='Password'>
		Remember Me<input type='checkbox' name='remember'>
		<input type='submit' name='submit' value='login'>
	</form>
	<a href="signup.html">Need an account</a>

</body>
</html>
<?php
	}

?>
	
