<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';
	$database = '18php05';
	$connect = mysqli_connect($server, $username, $password, $database);
	// GET data from URL
	$id = $_GET['Id'];
	$sql = "DELETE FROM users WHERE id = $id";
	mysqli_query($connect, $sql);
	// Redirect
	//header("Location: list_user.php");
?>