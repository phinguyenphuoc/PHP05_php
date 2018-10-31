<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if(isset($_POST['add_user'])){
		echo $_POST['name'].'-'.$_POST['email'];
	}
	?>
	<form name="addUser" action="#" method="post"> 
		<!-- method="get" -->
		<p>name:<input type="text" name="name"></p>
		<p>email:<input type="email" name="email"></p>
		<input type="submit" name="add_user" value="ADDUSER">
	</form>
	
</body>
</html>