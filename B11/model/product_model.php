<?php  
	include 'config/connect.php';
	class productModel extends connectDb{
		function getList(){
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		function addProduct($name, $price, $des, $avatar, $date){
			$sql = "INSERT INTO products(name,price,description,image,date) VALUES('$name', '$price', '$des', '$avatar', '$date')";
			mysqli_query($this->connect(), $sql);
		}
		function editProduct($name, $price, $des, $avatar, $date, $id){
			if($name!=''){
				$sql = "UPDATE products SET name='$name' WHERE id=$id";
				mysqli_query($this->connect(), $sql);
			}
			if($price!=''){
				$sql = "UPDATE products SET price='$price' WHERE id=$id";
				mysqli_query($this->connect(), $sql);
			}
			if($des!=''){
				$sql = "UPDATE products SET description='$des' WHERE id=$id";
				mysqli_query($this->connect(), $sql);
			}
			if($date!=''){
				$sql = "UPDATE products SET date='$date' WHERE id=$id";
				mysqli_query($this->connect(), $sql);
			}
			$imageAvatar = $_FILES['avatar'];
			if($imageAvatar!=''){
				$avatar = $imageAvatar['name'];
				$sql = "UPDATE products SET image='$avatar' WHERE id=$id";
				mysqli_query($this->connect(), $sql);
			}
		}
	}
?>