<?php  
	$sever="localhost";
	$username="root";
	$password="";
	$database="products";
	$con=mysqli_connect($sever,$username,$password,$database);
	if (mysqli_connect_error()) {
		echo "connect error".mysqli_connect_error();
	}else echo "connect sucess"."<br>";
	$fetch = "SELECT * FROM products";
	//$result = $connect->query($fetch);
	$result = mysqli_query($con,$fetch);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$id=$row['id'];
			echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]." - descriptionn: " . $row["description"]. " - Image: " .$row['image']. " - date: " . $row['date'] . "    ";
			echo "<a href='edit.php?id=$id'>Edit   |</a>";	
			echo "<a href='delete.php?id=$id'>   DELETE</a> <br>";
		}
	} else {
		echo "0 results";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form>
		<a href="add.php"><input type="button" name="button" value="add" ></a>
	</form>
</body>
</html>