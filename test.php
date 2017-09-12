<?php
	function call()
	{
?>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php

	
	if($_SESSION['value']=='Apple iPhone 7 (Black, 32GB) by Apple')
	{
		echo"Apple iPhone 7 (Black, 32GB) by Apple";
		$array_nameM1=$_SESSION['array_name'];
		$keyM1=$_SESSION['key'];
		echo $array_nameM1,$keyM1;
?>
		<html>
		<body>
			<form action="delete.php" method="post">
				<input type="hidden" value=<?php echo $array_nameM1;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM1;  ?> name="key" >
				<input type="hidden" value="Apple iPhone 7 (Black, 32GB) by Apple" name='name'>
				<input type="submit" name="submit" value="remove">
			</form>
		</body>
		</html>
<?php
	}
	if($_SESSION['value']=='Coolpad Note 5 (Space Grey, 32 GB) by Coolpad')	
	{
		echo"Coolpad Note 5 (Space Grey, 32 GB) by Coolpad";
		$array_nameM2=$_SESSION['array_name'];
		$keyM2=$_SESSION['key'];
		echo $array_nameM2,$keyM2;
?>
		<html>
		<body>
			<form action="delete.php" method="post">
				<input type="hidden" value=<?php echo $array_nameM2;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM2;  ?> name="key" >
				<input type="hidden" value="Coolpad Note 5 (Space Grey, 32 GB) by Coolpad" name='name'>
				<input type="submit" name="submit" value="remove">
			</form>
		</body>
		</html>
<?php
	}
	if($_SESSION['value']=='Lenovo Z2 Plus (Black, 64GB) by Lenovo')	
	{
		echo"Lenovo Z2 Plus (Black, 64GB) by Lenovo";
		$array_nameM3=$_SESSION['array_name'];
		$keyM3=$_SESSION['key'];
		echo $array_nameM3,$keyM3;
?>
		<html>
		<body>
			<form action="delete.php" method="post">
				<input type="hidden" value=<?php echo $array_nameM3;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM3;  ?> name="key" >
				<input type="hidden" value="Lenovo Z2 Plus (Black, 64GB) by Lenovo" name='name'>
				<input type="submit" name="submit" value="remove">
			</form>
		</body>
		</html>
<?php
	}
	if($_SESSION['value']=='Samsung On5 Pro (Gold) by Samsung')	
	{
		echo"Samsung On5 Pro (Gold) by Samsung";
		$array_nameM4=$_SESSION['array_name'];
		$keyM4=$_SESSION['key'];
		echo $array_nameM4,$keyM4;
?>
		<html>
		<body>
			<form action="delete.php" method="post">
				<input type="hidden" value=<?php echo $array_nameM4;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM4;  ?> name="key" >
				<input type="hidden" value="Samsung On5 Pro (Gold) by Samsung" name='name'>
				<input type="submit" name="submit" value="remove">
			</form>
		</body>
		</html>
<?php
	}
	if($_SESSION['value']=='Moto G5s Plus (Lunar Grey, 64GB) by Motorola')	
	{
		echo"Moto G5s Plus (Lunar Grey, 64GB) by Motorola";
		$array_nameM5=$_SESSION['array_name'];
		$keyM5=$_SESSION['key'];
		echo $array_nameM5,$keyM5;
?>
		<html>
		<body>
			<form action="delete.php" method="post">
				<input type="hidden" value=<?php echo $array_nameM5;  ?> name="array_name">
				<input type="hidden" value=<?php echo $keyM5;  ?> name="key" >
				<input type="hidden" value="Moto G5s Plus (Lunar Grey, 64GB) by Motorola" name='name'>
				<input type="submit" name="submit" value="remove">
			</form>
		</body>
		</html>
<?php
	}
?>
</body>
</html>
<?php
}
?>