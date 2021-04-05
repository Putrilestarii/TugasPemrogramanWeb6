<?php
$servername = "localhost"; // menampilkan server database
$username = "root"; // menampilkan username
$password = ""; // menampilkan password
$dbname = "mydb"; // menampilkan nama database

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer','Jerman','4')";
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Spa','Spa','3')";
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Eng','English','3')";


if (mysqli_query($conn, $sql)) {
	echo "New Record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>