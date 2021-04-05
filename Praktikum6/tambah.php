<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
 
	<h2>Selamat Datang </h2>
    <!--membuat link -->
	<a href="index.php">MENU</a> <!-- mengalihkan ke halaman index-->
	<br/>
	<br/>
    <h3>Menambah Data Pegawai</h3>
    <!--membuat tabel dalam form-->
	<form method="post" action="input_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No.Telepon</td>
				<td><input type="text" name="notelp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>
				<td>Departemen</td>
				<td><input type="text" name="departemen"></td>
			</tr>
			<tr>
				<td></td> <!--membuat button simpan-->
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
