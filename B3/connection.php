<?php 
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = '18php05_demo';
	$connect = mysqli_connect($server,$username,$password,$database);
	if (mysqli_connect_error()) {
		echo "connect error".mysqli_connect_error();
	}else echo "connect sucess";
	$sql = "INSERT INTO users(name, email) VALUES('TEST', 'ok@gmail.com')";
	mysqli_query($connect, $sql);
?>