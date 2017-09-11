<html>
<head>
	<title>test</title>
</head>
<body>
<?php
	session_start();
	if($_SESSION['value']=='NOKIA')
	{
		echo"nokia selected";
	}
	if($_SESSION['value']=='SONY')
	{
		echo"sony  selected";
	}
?>
</body>
</html>