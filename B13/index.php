<?php  
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<a href="index.php?action=home">Homepage</a>
	<a href="index.php?action=login">Log in</a>
	<a href="index.php?action=buy">Shop</a>
	<a href="index.php?action=view_cart">View Cart</a>
	<a href="index.php?action=logout">Log Out</a>
	<!-- <a href="index.php?action=info">Your Information</a> -->
	<?php  
	include 'controller/user_controller.php';
	$handle = new homeController();
	$handle->handleRequest();
	?>
</body>
</html>