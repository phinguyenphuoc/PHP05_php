<?php  
	$sever="localhost";
	$username="root";
	$password="";
	$database="products";
	$con=mysqli_connect($sever,$username,$password,$database);
	$id = $_GET['id'];
	$sql = "SELECT * FROM products INNER JOIN listItem ON products.category_id=listItem.category_id WHERE products.category_id=$id";
	$result = mysqli_query($con,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "category_id: " . $row["category_id"] . " - " . "name: " . $row['name'] . " - " . "Price: " . $row['price'] . " - " ."Description: " . $row['description'] . " - " . "Image: " . $row['image'] . " - " . "date: " . $row['date'] . "<br>";
		}
	} else {
		echo "0 results";
	}
?>