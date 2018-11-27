<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<?php
		include 'connect.php'; 
		$con= new connectDb();
		$connect=$con->connect();  
		if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$a='';
			$password=md5($_POST['password']);
			$flag=false;
			$sq = "SELECT * FROM users";
			$result = mysqli_query($connect, $sq);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if($username==$row['username'] && $password==$row['password']){
						$flag=true;
					}
				}
			}
			if ($flag==true) {
				echo "dang nhap thanh cong";
				$_SESSION['login'] = true;

			}else{
				echo "dang nhap that bai";
				$_SESSION['login'] = false;
			}
		}
	?>
	<form name="login_form" action="#" method="post"  enctype="multipart/form-data">
		<p>Username:
			<input type="text" name="username" >
		</p>
		<p>Password:
			<input type="password" name="password">
		</p>
		<input type="submit" name="submit" value="submit">
	</form>
	<a href="list_user.php">list</a>
</body>
</html>