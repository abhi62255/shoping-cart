<?php
	session_start();	
	if(isset($_POST['submi']))
	{
			echo"welcome";
			$item=$_POST["item"];
			switch($item)
			{
				case 1:
						echo"MOBILES";
?>
						<html>
						<body>
							<form action="selected.php"; method="post">
								<input type="checkbox" name="mobile[]" value="NOKIA">NOKIA<br>
								<input type="checkbox" name="mobile[]" value="SONY" >SONY<br>
								<input type="checkbox" name="mobile[]" value="SAMSUNG" >SAMSUNG<br>
								<input type="checkbox" name="mobile[]" value="MICROMAX">MICROMAX<br>
								<input type="checkbox" name="mobile[]" value="APPLE" >APPLE<br>
								<input type="submit" name="mobile1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;
				case 2:
						echo"PENDRIVE";
?>
						<html>
						<body>
							<form action="selected.php" method="post">
								<input type="checkbox" name="pendrive[]" value="HP" >HP<br>
								<input type="checkbox" name="pendrive[]" value="SAND DISK" >SAND DISK<br>
								<input type="checkbox" name="pendrive[]" value="TOSHIBA" >TOSHIBA<br>
								<input type="checkbox" name="pendrive[]" value="SAMSUNG" >SAMSUNG<br>
								<input type="checkbox" name="pendrive[]" value="SONY" >SONY<br>
								<input type="submit" name="pendrive1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;
				case 3:
						echo"IPOD";
?>
						<html>
						<body>
							<form action="selected.php" method="post">
								<input type="checkbox" name="ipod[]" value="APPLE" >APPLE<br>
								<input type="checkbox" name="ipod[]" value="CHINA" >CHINA<br>
								<input type="checkbox" name="ipod[]" value="HP" >HP<br>
								<input type="submit" name="ipod1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;
				case 4:
						echo"LAPTOP";
?>
						<html>
						<body>
							<form action="selected.php" method="post">
								<input type="checkbox" name="laptop[]" value="APPLE" >APPLE<br>
								<input type="checkbox" name="laptop[]" value="HP" >HP<br>
								<input type="checkbox" name="laptop[]" value="DELL" >DELL<br>
								<input type="checkbox" name="laptop[]" value="SONY" >SONY<br>
								<input type="checkbox" name="laptop[]" value="LENOVO" >LENOVO<br>
								<input type="submit" name="laptop1" value="ADD TO CART">
							</form>
							<a href="home.php">HOME MENU</a>
						</body>
						</html>
<?php
						break;	
			}
			
			
	}
	else
	{
		header('Location: home.html');
	}
?>