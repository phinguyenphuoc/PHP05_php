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
					case 'detail':
						$detailProduct = new productModel();
						$result = $detailProduct->getDetail();
						include 'view/detail_products.php';
						break;
					default:
						# code...
						break;
				}
		}
	}
?>