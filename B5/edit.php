<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	<?php 
		$sever="localhost";
		$username="root";
		$password="";
		$database="products";
		$con=mysqli_connect($sever,$username,$password,$database);
		if(isset($_POST['submit'])){ 
			$name = $_POST['name'];
			$price = $_POST['price'];
			$des = $_POST['description'];
			$date = $_POST['date'];
			$sql = "UPDATE products SET name='$name' WHERE id=6";
			mysqli_query($con, $sql);
			$sql = "UPDATE products SET price='$price' WHERE id=6";
			mysqli_query($con, $sql);
			$sql = "UPDATE products SET description='$des' WHERE id=6";
			mysqli_query($con, $sql);
			$sql = "UPDATE products SET date='$date' WHERE id=6";
			mysqli_query($con, $sql);
		}

	?>
	<form name="edit_form" action="#" method="post">
		<p>Name:
			<input type="text" name="name">
		</p>
		<p>Price:
			<input type="text" name="price">
		</p>
		<p>Description:
			<input type="text" name="description">
		</p>
		<p>Image:
			<input type="file" name="pic" accept="image/*">
		</p>
		<p>Date
			<input type="date" name="date">
		</p>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>