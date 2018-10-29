<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validate form</title>
</head>
<body>
	<?php 
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$database = '18php05_demo';
		$connect = mysqli_connect($server,$username,$password,$database); 
		$errname = "";
		$erremail = "";
		$name = "";
		$email = "";
		$flag = true;
		if(isset($_POST['submit'])){
			if(($_POST['name'])==NUll){
				$errname = "vui long nhap ten <br>";
				$flag=false;
			}else{
				$name = $_POST['name'];
			}
			if (($_POST['email'])==NUll) {
				$erremail = "vui long nhap email <br>";
				$flag=false;
			}else{
				$email = $_POST['email'];
			}
			if($flag){
				echo "dang ki thanh cong";
				$sql = "INSERT INTO users(name, email) VALUES('$name', '$email')";
				mysqli_query($connect, $sql);
			}
		}
		//hien thi danh sach
		$fetch = "SELECT * FROM users";
		//$result = $connect->query($fetch);
		$result = mysqli_query($connect,$fetch);


			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "id: " . $row["Id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
			    }
			} else {
			    echo "0 results";
			}
		//xoa du lieu 
		$del = "DELETE FROM users WHERE name='TEST'";
		if ($connect->query($del) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $connect->error;
		}

	?>
	<form name="validate_form" action="#" method="post">
		<p>Ho va ten:
			<br>
			<span><?php echo $errname ?></span>
			<input type="text" name="name" value="<?php echo $name ?>">
		</p>
		<p>Email:
			<br>
			<span><?php echo $erremail ?></span>
			<input type="email" name="email" value="<?php echo $email ?>">
		</p>
		<input type="submit" name="submit" value="submit">	
	</form>
</body>
</html>