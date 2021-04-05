<?php
$servername = "localhost"; // inisialisasi server database
$username = "root"; //inisialisasi username
$password = ""; // inisialisasi password
$dbname = "mydb"; //inisialisasi nama database

$conn = mysqli_connect($servername, $username, $password, $dbname);// membuat koneksi database ke sever mysql

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); //mengeksekusi databse
}

$sql = "CREATE TABLE buku_tamu(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
isi TEXT
)"; // membuat tabel baru


if (mysqli_query($conn, $sql)) { //  
	echo "New Record created successfully"; //melakukan eksekusi perintah SQL untuk memanipulasi database yang berhasil dilakukan koneksinya 
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>