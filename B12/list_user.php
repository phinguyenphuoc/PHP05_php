<?php
	session_start();
	if($_SESSION['login'] == true){
		include 'connect.php'; 
		$con= new connectDb();
		$connect=$con->connect();  
		$sql = "SELECT username, name FROM users";
		$result = mysqli_query($connect, $sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "TEN: " . $row['name'] ."-----"."USERNAME: " . $row['username'];
			}
		}
	}else{
		header("location: login.php");
	}
?>