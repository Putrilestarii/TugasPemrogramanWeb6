<!DOCTYPE html>
<html>
<head>
	<?php
	$servername = "localhost"; // inisialisasi server database
	$username = "root"; //inisialisasi username
	$password = ""; // inisialisasi password
	$dbname = "mydb"; //inisialisasi nama database

	//Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//Check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	$sql = "SELECT kode, negara, champion FROM liga"; // menyeleksi field  kode, negara, champion dari tabel liga
	$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) { // jika nilai diatas 0 menampilkan jumlah record yang terdapat pada database
		// Output data of each row
		while ($row = mysqli_fetch_assoc($result)) { // menampilkan nilai yang sesuai dengan jumlah record yang ada
			echo "Kode : " . $row["kode"]. " - Negara : " . $row["negara"]. " ". $row["champion"]. "<br>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
	?>

</body>
</html>