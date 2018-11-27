<?php include 'header.php';?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   	<?php  
		include 'controller/product_controller.php';
		$handle = new homeController();
		$handle->handleRequest();
	?>
  </div>
  <!-- /.content-wrapper -->

<?php include 'footer.php';?>