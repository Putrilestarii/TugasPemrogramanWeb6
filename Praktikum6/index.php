<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="input.php">+ TAMBAH PEGAWAI</a>
	<br>
	<br>
	<table border="1" width="50%">
		<tr>
			<th>No</th>
			<th>ID_Pegawai</th>
			<th>Nama</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$host = "localhost"; // Nama hostnya
		$username = "root"; // Username
		$password = ""; // Password 
		$database = "db_pegawai"; // 

		$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
		// Check Connection
		if (mysqli_connect_errno()) { //menampilkan jika mySQLI connect error maka tampilkan teks failed connect to MySQL
			echo "Failed to connect to MySQL ". mysqli_connect_error();
		};
		$no = 1;
		$data = mysqli_query($conn,"select * from tb_pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['departemen']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_pegawai']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_pegawai']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>