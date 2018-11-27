<?php 
	session_start(); 
	include "model/user_model.php";
	class homeController{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'home':
						echo "Homepage";
						break;
					case 'login':
						include 'view/login.php';
						$username = "";
						$password = "";
						if(isset($_POST['submit'])){
							$username = $_POST['username'];
							$password = md5($_POST['password']);
						}
						$login = new userModel();
						$flag = $login->checkLogin($username,$password);
						if($flag==true){
							echo "dang nhap thanh cong";
							$_SESSION['id'] = true;
						}else{
							echo "dang nhap that bai";
							$_SESSION['id'] = false;
						}
					
						break;
					case 'buy':
						if($_SESSION['id']==true){
							$product = new userModel();
							$result = $product->getProduct();
							include 'view/cart1.php';
							$flag1=false;
							echo "<script>
								$(#'button1').click(function(){".
								   $flag1=true;
								"}); 
							</script>";
							if($flag1){
								echo "sssssssssssssssssssssssssssssssssss";
							}

				

						}else {
							header("location: index.php?action=login");
						}
						break;
				}
		}
	}
?>