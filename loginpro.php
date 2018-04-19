<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'nha_gov';
	$Email = $_POST['email'];
	$password = $_POST['pass'];

	$alpha = mysqli_connect($server,$user,$pass,$database);

	$beta = "SELECT Email,password FROM user";

	$gamma = mysqli_query($alpha, $beta);

	if($gamma->num_rows > 0)
	{
		while($row = $gamma->fetch_assoc())
		{
			if($row['Email']==$Email & $row['password']==$password)
			{
				if (isset($_POST['Submit1']))
				{
					echo "<script> window.location = 'dashboard.php'; </script>";
				}
			}
		}
		echo "<script> window.location = 'index.html'; </script>";
		echo "<script> window.alert('Invalid Email or Password'); </script>";
	}
	else
	{
		echo "0 results";
	}

	mysqli_close($alpha);
?>
