<?php  
	$server = 'localhost';
	$username = 'root';
	$password = ''; 
	$database = '18php05_shop';
	$connect = mysqli_connect($server, $username, $password, $database);
	if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}else{ 
	echo "Connected successfully";
	}
	//$sql = "SELECT * FROM product_categories";
	$sql = "SELECT id FROM product_categories WHERE title = 'samsung' ";
	$result = mysqli_query($connect, $sql);
	$row = $result->fetch_assoc();
	echo $row['id'];

?>