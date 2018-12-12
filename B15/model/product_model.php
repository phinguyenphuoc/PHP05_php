<?php  
	include 'config/connect.php';
	class productModel extends connectDb{
		function getList(){
			$sql = "SELECT * FROM products";
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		function getLista($id){
			$sql = "SELECT * FROM products WHERE id=$id";
			$result = mysqli_query($this->connect(), $sql);
			$row = $result->fetch_assoc();
			return $row;
		}
		function addProduct($name, $des, $price, $avatar, $category, $created){
			$sql = "INSERT INTO products(name,description,price,image,category_id,created) VALUES('$name','$des', '$price', '$avatar', '$category', '$created')";
			mysqli_query($this->connect(), $sql);
		}
		function getCategory(){
			$sql = "SELECT title FROM product_categories";
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}
		function getCategoryId($catogory_name){
			$sql = "SELECT id FROM product_categories WHERE title = '$catogory_name' ";
			$result = mysqli_query($this->connect(), $sql);
			$row = $result->fetch_assoc();
			return $row['id'];
		}
		function addCategory($category){
			$sql = "INSERT INTO product_categories(title) VALUES('$category')";
			mysqli_query($this->connect(), $sql);
		}
		function regist($name, $username, $password){
			$pass = md5($password);
			$sql = "INSERT INTO users(name,username,password) VALUES('$name','$username','$pass')";
			mysqli_query($this->connect(), $sql);
		}
		function login($username, $password){
			$pass = md5($password);
			$sql = "SELECT username,password FROM users";
			$temp = '';
			$result = mysqli_query($this->connect(), $sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	if($row['username']==$username && $row['password']==$pass){
			    		$temp=$username;
			    		break;
			    	}
			    }
			}
			return $temp; 
		}	
	}
?>