<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include 'connect.php'; 
		$con= new connectDb();
		$connect=$con->connect();
		$flag=true; 
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$sq = "SELECT username FROM users";
			$result = mysqli_query($connect, $sq);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if($username==$row['username']){
						$flag=false;
					}
				}
			}
			if($flag==true){
				$sql = "INSERT INTO users(name,username,password) VALUES('$name', '$username', '$password')";
				mysqli_query($connect, $sql);
				echo "dang ki thanh cong";
			}else{
				echo "username da bi trung";
			}
		}
	?>
	<form name="add_form" action="#" method="post"  enctype="multipart/form-data">
		<p>Name:
			<input type="text" name="name">
		</p>
		<p>Username:
			<input type="text" name="username" >
		</p>
		<p>Password:
			<input type="password" name="password">
		</p>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>