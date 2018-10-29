<?php 
	$sever="localhost";
	$username="root";
	$password="";
	$database="18php05";
	$con=mysqli_connect($sever,$username,$password,$database);
	if (mysqli_connect_error()) {
		echo "connect error".mysqli_connect_error();
	}else echo "connect sucess"."<br>";
	$fetch = "SELECT * FROM users";
		//$result = $connect->query($fetch);
	$result = mysqli_query($con,$fetch);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["Id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]."   ";
			echo "<a href='delete_user.php?id=$id'>DELETE</a>";
		}
	} else {
		echo "0 results";
	}

?>