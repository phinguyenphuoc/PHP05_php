<?php
	include 'model/product_model.php';
	class homeController{
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
								}else{
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
						include 'view/single_product.php';
						break;
					case 'login':
						$username = '';
						$password = '';
						if(isset($_POST['login'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							$login = new productModel();
							$_SESSION['$username'] = $login->login($username,$password);
							if($_SESSION['$username']!=''){
								echo "dang nhap thanh cong";
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
				}
		}
	}
?>