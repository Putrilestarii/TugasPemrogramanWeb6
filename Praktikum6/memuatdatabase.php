<?phpyng 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

// Create connection
$conn = mysqli_connect($servername, $username, $password); // membuata koneksi ke server mysql

// Check Connectiom
if (!$conn) {
	die("connection failed: ".mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: ".mysqli_connect($conn);
}

mysqli_close($conn);
?>