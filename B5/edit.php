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
		$id=$_GET['id'];
		if(isset($_POST['submit'])){ 
			$name = $_POST['name'];
			$price = $_POST['price'];
			$des = $_POST['description'];
			$date = $_POST['date'];
			$sql="";
			if($name!=''){
				$sql = "UPDATE products SET name='$name' WHERE id=$id";
				mysqli_query($con, $sql);
			}
			if($price!=''){
				$sql = "UPDATE products SET price='$price' WHERE id=$id";
				mysqli_query($con, $sql);
			}
			if($des!=''){
				$sql = "UPDATE products SET description='$des' WHERE id=$id";
				mysqli_query($con, $sql);
			}
			if($date!=''){
				$sql = "UPDATE products SET date='$date' WHERE id=$id";
				mysqli_query($con, $sql);
			}
			//////////////////////////
			$imageAvatar = $_FILES['avatar'];
			var_dump($imageAvatar);
			// 1. lay duoc ten anh de luu vao database
			$avatar = $imageAvatar['name'];
			$pathSave = 'uploads/'.$avatar;
			// 2. Upload anh len thu muc luu tru
			move_uploaded_file($imageAvatar['tmp_name'], $pathSave);
			$sql = "UPDATE products SET image='$avatar' WHERE id=$id";
			mysqli_query($con, $sql);
			//--------------------------------
			header("Location: THmysql.php");
		}

	?>
	<form name="edit_form" action="#" method="post" enctype="multipart/form-data">
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
			<input type="file" name="avatar" accept="image/*">
		</p>
		<p>Date
			<input type="date" name="date">
		</p>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>