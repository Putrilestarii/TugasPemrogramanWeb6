<?php
$servername = "localhost"; // inisialisasi server database
$username = "root"; //inisialisasi username
$password = ""; // inisialisasi password
$dbname = "db_pegawai"; //inisialisasi nama database

$conn = mysqli_connect($servername, $username, $password, $dbname);// membuat koneksi database ke sever mysql

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); //mengeksekusi databse
}

$sql = "INSERT INTO tb_pegawai (nama, departmen)
VALUES ('Putri','Pertanahan')";


if (mysqli_query($conn, $sql)) { //  
	echo "New Record created successfully"; //melakukan eksekusi perintah SQL untuk memanipulasi database yang berhasil dilakukan koneksinya 
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>