<?php 
	$server = 'localhost'; 
	$username = 'root';
	$password = ''; 
	$database = 'products';
	$connect = mysqli_connect($server, $username, $password, $database);
	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE id = $id";
	mysqli_query($connect, $sql);
	header("Location: THmysql.php");
?>