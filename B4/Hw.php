<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hw</title>
</head>
<body>
	<?php
		$sever="localhost";
		$username="root";
		$password="";
		$database="18php05";
		$con=mysqli_connect($sever,$username,$password,$database);
		if (mysqli_connect_error()) {
			echo "connect error".mysqli_connect_error();
		}else echo "connect sucess";
		//-------------
		$errname=""; 
		$erremail="";
		$success="";
		$name="";
		$email="";
		$flag=true;

		if (isset($_POST['submit'])) {
			if ($_POST['name']=="") {
				$flag=false;
				$errname="Vui long nhap ten <br>";
			}else{
				$name=$_POST['name'];
			}
			if($_POST['email']==""){
				$flag=false;
				$erremail="Vui long nhap email <br>";
			}else{
				$email=$_POST['email'];
			}
			if ($flag) {
				$success="ban da dang ki thanh cong ";
				$sql = "INSERT INTO users(name,email) VALUES('$name','$email')";
				mysqli_query($con,$sql);
			}
		}
	?>
	<form name="Hw" action="#" method="post">
		<?php echo $success ?>
		<p>Name
			<br>
			<?php echo $errname ?>
			<input type="text" name="name" value="<?php echo $name ?>">
		</p>
		<p>Email:
			<br>
			<?php echo $erremail ?>
			<input type="email" name="email" value="<?php echo $email ?>">
		</p>
		<input type="submit" name="submit">
	</form>
</body>
</html>