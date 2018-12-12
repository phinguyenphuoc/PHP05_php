<?php
	include 'controller/home_controller.php';  
	include 'header.php';
	$handle = new homeController();
	$handle->handleRequest();
	include 'footer.php';
	
	
?>