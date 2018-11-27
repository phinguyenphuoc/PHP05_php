<?php  
	include "config/connect.php";
	class userModel extends connectDb{
		function checkLogin($user, $pass){
			$sql = "SELECT username,password FROM users";
			$result = mysqli_query($this->connect(), $sql);
			$flag = false;
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if($user==$row['username'] && $pass==$row['password']){
						$flag=true;
					}
				}
			}
			return $flag;
		}
		function getProduct(){
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}
	}
?>