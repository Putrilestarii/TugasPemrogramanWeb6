<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title> <!-- menampilkan title-->
</head>
<body>
	<h1>Demo Koneksi Database</h1> <!-- menampilkan pargraf h1 -->
	<?php   
	$con = mysqli_connect("localhost","root","","mydb"); // Menyambungkan koneksi ke database mysql

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error()
			;
		exit();
	}
	?>
</body> 
</html>