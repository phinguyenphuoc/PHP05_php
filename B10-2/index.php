<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<ul>
	    <li><a href="index.php">Home</a></li>
	    <li><a href="index.php?action=list">List Products</a></li>
	    <li><a href="index.php?action=detail">Products Details</a></li>
	</ul>
	<?php  
		include 'controller/product_controller.php';
		$handle = new homeController();
		$handle->handleRequest();
	?>
</body>
</html>