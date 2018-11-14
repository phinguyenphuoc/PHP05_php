<?php  
	include 'model/product_model.php';
	class homeController{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'home':
						echo "abcss";
						break;
					case 'list':
						$listProduct = new productModel();
						$result = $listProduct->getList();
						include 'view/list_products.php';
						break;
					case 'add':
						include 'view/add_product.php';
						if(isset($_POST['submit'])){
							if($flag==true){
							$add = new productModel();
							$add->addProduct($name, $price, $des, $avatar, $date);
							}
						}
						break;
					case 'edit':
						include 'view/edit.php';
						if(isset($_POST['submit'])){
							$edit = new productModel();
							$edit->editProduct($name, $price, $des, $avatar, $date);
						}
						break;
					default:
						# code...
						break;
				}
		}
	}
?>