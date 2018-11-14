<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	<?php 
		$id=$_GET['id'];
		if(isset($_POST['submit'])){ 
			$name = $_POST['name'];
			$price = $_POST['price'];
			$des = $_POST['description'];
			$date = $_POST['date'];
			$imageAvatar = $_FILES['avatar'];
			$avatar = $imageAvatar['name'];
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