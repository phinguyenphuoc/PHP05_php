<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add</title>
</head>
<body>
	<?php 
		$sever="localhost";
		$username="root";
		$password="";
		$database="products";
		$con=mysqli_connect($sever,$username,$password,$database);
		if (mysqli_connect_error()) {
			echo "connect error".mysqli_connect_error();
		}else echo "connect sucess"."<br>";
		$errname="";
		$errprice="";
		$errdes="";
		$errdate="";
		$name="";
		$price="";
		$des="";
		$date="";
		$flag = true;
		if(isset($_POST['submit'])){
			if(($_POST['name'])==NUll){
				$errname = "vui long nhap ten <br>";
				$flag=false;
			}else{
				$name = $_POST['name'];
			}
			if (($_POST['price'])==NUll) {
				$errprice = "vui long nhap gia <br>";
				$flag=false;
			}else{
				$price = $_POST['price'];
			}
			if (($_POST['price'])==NUll) {
				$errdes = "vui long nhap mo ta <br>";
				$flag=false;
			}else{
				$des = $_POST['description'];
			}
			if (($_POST['date'])==NUll) {
				$errdate = "vui long nhap ngay<br>";
				$flag=false;
			}else{
				$date = $_POST['date'];
			}
			//--------------------
			$imageAvatar = $_FILES['avatar'];
			var_dump($imageAvatar);
			// 1. lay duoc ten anh de luu vao database
			$avatar = $imageAvatar['name'];
			$pathSave = 'uploads/'.$avatar;
			// 2. Upload anh len thu muc luu tru
			move_uploaded_file($imageAvatar['tmp_name'], $pathSave);
			//--------------------------------
			if($flag){
				echo "dang ki thanh cong";
				$sql = "INSERT INTO products(name,price,description,image,date) VALUES('$name', '$price', '$des', '$avatar', '$date')";
				mysqli_query($con, $sql);
				header("Location: THmysql.php");
			}
		}
	?>
	<form name="add_form" action="#" method="post"  enctype="multipart/form-data">
		<p>Name:
			<?php echo $errname ?>
			<input type="text" name="name">
		</p>
		<p>Price:
			<?php echo $errprice ?>
			<input type="text" name="price">
		</p>
		<p>Description:
			<?php echo $errdes ?>
			<input type="text" name="description">
		</p>
		<p>Image:
			<input type="file" name="avatar">
		</p>
		<p>Date
			<?php echo $errdate ?>
			<input type="date" name="date">
		</p>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>