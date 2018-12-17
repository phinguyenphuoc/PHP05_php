<?php
	include 'model/product_model.php';
	class homeController{
		public $i=0;
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'home':
						include 'view/home.php';
						break;
					case 'shop':
						$quantity = $_GET['quantity'];
						$list = new productModel();
						$result = $list->getList();
						include 'view/shop.php';
						break;
					case 'add_product':
						$handleCate = new productModel();
						$result = $handleCate->getCategory();
						$errname="";
						$errprice="";
						$errdes="";
						$errdate="";
						$errimage = "";
						$cate= "";
						$name="";
						$price="";
						$des="";
						$created="";
						$avatar="";
						$cate_id="";
						$flag=true;
						if(isset($_POST['submit'])){
							$cate = $_POST['catogory_name'];
							$cate_id = $handleCate->getCategoryId($cate);
							if(($_POST['name'])==NUll){
								$errname = "<br>Vui long nhap ten <br>";
								$flag=false;
							}else{
								$name = $_POST['name'];
							}
							if (($_POST['description'])==NUll) {
								$errdes = "<br>Vui long nhap chi tiet san pham<br>";
								$flag=false;
							}else{
								$des = $_POST['description'];
							}
							if (($_POST['price'])==NUll) {
								$errprice = "<br>vui long nhap gia<br>";
								$flag=false;
							}else{
								$price = $_POST['price'];
							}
							if (($_POST['date_created'])==NUll) {
								$errdate = "<br>Vui long chon ngay<br>";
								$flag=false;
							}else{
								$created = $_POST['date_created'];
							}
							$imageAvatar = $_FILES['avatar'];
							if($imageAvatar['type']==NULL){
								$errimage="<br>vui long chon anh";
								$flag=false;
							}else{
								$avatar = $imageAvatar['name'];
								$pathSave = 'uploads/'.$avatar;
							
							}
							if($flag==true){
								$handleCate->addProduct($name, $des, $price, $avatar, $cate_id, $created);
								move_uploaded_file($imageAvatar['tmp_name'], $pathSave);
							}
						}
						include 'view/add_product.php';
						break;
					case 'add_category':
						$category = '';
						$errcate = '';
						$flag = true;
						if(isset($_POST['submit'])){
							if(($_POST['category'])==NUll){
								$errcate = 'Vui long nhap category';
							}else {
								$category = $_POST['category'];
								$handleCate = new productModel();
								$result = $handleCate->getCategory();
								if($result->num_rows > 0){
								    while($row = $result->fetch_assoc()){
								    	if($row['title']==$category){
								    		$flag = false;
								    	}
								    }
								}
								if($flag==true){
									$handleCate->addCategory($category);
		addReview();						}else{
									$errcate = 'category da ton tai';
								}
							}
						}
						include 'view/add_category.php';
						break;
					case 'single':
						$id = $_GET['id'];
						$list = new productModel();
						$row = $list->getLista($id);
						$comment = '';
						include 'view/single_product.php';
						if(isset($_POST['submit'])){
							if($_SESSION['$user_id']==''){
								header("location: index.php?action=login");
							}else{
								$comment = $_POST['comment'];
								$list->addReview($comment, $_SESSION['$user_id']);
							}
						}
						break;
					case 'login':
						$username = '';
						$password = '';
						if(isset($_POST['login'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							$login = new productModel();
							$_SESSION['$user_id'] = $login->login($username,$password);
							if($_SESSION['$user_id']!=''){
								echo "dang nhap thanh cong";
								var_dump($_SESSION['$user_id']);
							}else {
								echo "dang nhap that bai";
							}
						}
						include 'view/login.php';
						break;
					case 'regist':
						$name = '';
						$username = '';
						$password = '';
						if(isset($_POST['regist'])){
							$name = $_POST['name'];
							$username = $_POST['username'];
							$password = $_POST['password'];
							$regist = new productModel();
							$regist->regist($name,$username,$password );
						}	
						include 'view/regist.php';
						break;
					case 'cart':
						$id = $_GET['product'];
						$num = 0;
						$key = array();
						if($id!=''){
							$cart[$id] = array('id' => $id, 'quantity' => 1);
							$_SESSION['cart'][$id]=$cart[$id];
							$num = 1;
						}
						if(isset($_POST['update_cart'])){
							$num = $_POST['quantity'];
							$cart[$id] = array('id' => $id, 'quantity' => $num);
							$_SESSION['cart'][$id]=$cart[$id];
						}
						$key = array_keys($_SESSION['cart']);
						$count = count($key);
						include 'view/cart.php';
						break;
					case 'unset':
						$id = $_GET['id'];
						unset($_SESSION['cart'][$id]);
						header("location: index.php?action=cart");
				}
		}
	}
?>