<?php  
	include 'model/product_model.php';
	class homeController{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'home':
						echo "Homepage";
						break;
					case 'list':
						$listProduct = new productModel();
						$result = $listProduct->getList();
						include 'view/list_products.php';
						break;
					case 'add':
						$errname="";
						$errprice="";
						$errdes="";
						$errdate="";
						$errimage = "";
						$name="";
						$price="";
						$des="";
						$date="";
						$avatar="";
						$flag=true;
						if(isset($_POST['submit'])){
							if(($_POST['name'])==NUll){
								$errname = "<br>vui long nhap ten <br>";
								$flag=false;
							}else{
								$name = $_POST['name'];
							}
							if (($_POST['price'])==NUll) {
								$errprice = "<br>vui long nhap gia <br>";
								$flag=false;
							}else{
								$price = $_POST['price'];
							}
							if (($_POST['price'])==NUll) {
								$errdes = "<br>vui long nhap mo ta <br>";
								$flag=false;
							}else{
								$des = $_POST['description'];
							}
							if (($_POST['date'])==NUll) {
								$errdate = "<br>vui long nhap ngay<br>";
								$flag=false;
							}else{
								$date = $_POST['date'];
							}
							$imageAvatar = $_FILES['avatar'];
							if($imageAvatar['type']==NULL){
								$errimage="<br>vui long chon anh";
								$flag=false;
							}else{
								// 1. lay duoc ten anh de luu vao database
								$avatar = $imageAvatar['name'];
								//	$pathSave = 'uploads/'.$avatar;
								// 2. Upload anh len thu muc luu tru
								//move_uploaded_file($imageAvatar['tmp_name'], $pathSave);
							}
							if($flag==true){
								$add = new productModel();
								$add->addProduct($name, $price, $des, $avatar, $date);
								header("location: index.php?action=list");
							}
						}
						include 'view/add_product.php';
						break;
					case 'edit':
						//include 'view/edit.php';
						$id = $_GET['id'];
						$listProduct2 = new productModel();
						$result = $listProduct2->getLista($id);
						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {
						       $name=$row['name'];
						       $price=$row['price'];
						       $des=$row['description'];
						       $date=$row['date'];
						       $avatar=$row['image'];
						    }
						}
						if(isset($_POST['submit'])){
							$id = $_GET['id']; 
							$name = $_POST['name'];
							$price = $_POST['price'];
							$des = $_POST['description'];
							$date = $_POST['date'];
							$imageAvatar = $_FILES['avatar'];
							if($imageAvatar['type']!=NULL){
								$avatar = $imageAvatar['name'];	
							}
							$edit = new productModel();
							$edit->editProduct($name, $price, $des, $avatar, $date, $id);
							header("location: index.php?action=list");
						}
						include 'view/edit.php';
						break;
					case 'delete':
						$id = $_GET['id'];
						$del = new productModel();
						$del->delProduct($id);
						$listProduct = new productModel();
						$result = $listProduct->getList();
						include 'view/list_products.php';
					default:
						# code...
						break;
				}
		}
	}
?>