<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<a href="index.php?action=home">Homepage</a>
	<a href="index.php?action=login">Log in</a>
	<a href="index.php?action=buy">Buy</a>
	<?php  
	include 'controller/user_controller.php';
	$handle = new homeController();
	$handle->handleRequest();
	?>
</body>
</html>