<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = 'none'; //$password = '';
	$database = '18php05_demo';

	$connect = mysqli_connect($server, $username, $password, $database);
	if (mysqli_connect_errno()){
		echo "Khong thanh cong!". mysqli_connect_error();
	}
	mysqli_set_charset($connect,"utf8");
?>