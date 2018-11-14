<?php  
	include 'db/connect.php';
	class productModel extends connectDb{
		function getList(){
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		function getDetail(){
			$sql = "SELECT description FROM products";
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}
	}
?>