<?php  
	// $arr=$_SESSION['user_cart'];
	// echo "user: ".$arr['user'];
	// echo "<br>";
	// echo "ma san pham: ".$arr['id_product'];
	// echo "         soluong: ".$arr['quantity'];
	$temp = $_SESSION['user'];
	var_dump($_SESSION[$temp.'_user_cart']);
?>