<?php 
	include "model/user_model.php";
	class homeController{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'home':
						echo "Homepage";
						break;
					case 'login':
					
						$username = "";
						$password = "";
						if(isset($_POST['submit'])){
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							$login = new userModel();
							$flag = $login->checkLogin($username,$password);
							if($flag==true){
								//header("location: index.php?action=buy");
							}else{
								echo "dang nhap that bai";
								unset($_SESSION['user']);
							}
						}
						include 'view/login.php';
						break;
					case 'buy':
						if($_SESSION['user']!=''){
							$product = new userModel();
							$result = $product->getProduct();
							include 'view/cart1.php';
							if (isset($_POST['add_button'])) {
								$temp=$_SESSION['user'];
								$product_inf = array('user' => $temp,'id_product' => $_POST['id_product'], 'quantity' => $_POST['number']);
								$_SESSION[$temp.'_user_cart'] = $product_inf;
							}				
						}else {
							header("location: index.php?action=login");
						}
						break;
					case 'logout':
						unset($_SESSION['user']);
						break;
					case 'info':
						$info = new userModel();
						$info->getInfo($_SESSION['user']);

					case 'view_cart':
						if($_SESSION['user']!=''){
							include 'view/view_cart.php';
						}
						break;

				}
		}
	}
?>