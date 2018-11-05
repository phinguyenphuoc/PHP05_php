<?php  
	$sever="localhost";
	$username="root";
	$password="";
	$database="products";
	$con=mysqli_connect($sever,$username,$password,$database);
	if (mysqli_connect_error()) {
		echo "connect error".mysqli_connect_error();
	}else echo "connect sucess"."<br>";
	$sql = "SELECT * FROM listItem";
	$result = mysqli_query($con,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$id=$row['category_id'];
			echo "Loai san pham: " . $row["list_name"] . "   ";
			echo "<a href='view.php?id=$id'>View</a><br>";
		}
	} else {
		echo "0 results";
	}
?>