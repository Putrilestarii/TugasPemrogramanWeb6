<?php 
$host = "localhost"; // Menampilkan hostnya
$username = "root"; // Menampilkan Username
$password = ""; // Menampilkan Password 
$database = "db_pegawai"; // Menampilkan db_pe

$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL

// Check Connection
if (mysqli_connect_errno()) { //Menampilkan jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
 
// mengirim data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$departemen = $_POST['departemen'];
 
// menampilkan input data ke dalam  database
mysqli_query($conn,"insert into tb_pegawai values('$id_pegawai','$nama','$departemen')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>