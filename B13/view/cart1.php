
	
	<div class="wrapper">
		<h1>SHOPPING CART</h1>
		
			<div class="title">
				<p>Image</p>
				<p>Detail</p>
				<p>Quantity</p>
				<p>Total</p>

			</div>
			<?php
			$i=1;
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {   
					echo "
					<form name='login_form' action='#' method='post'  enctype='multipart/form-data'>
					<div class='product'>
							<div class='image'>
						<img src='uploads/".$row['image']."' alt='applewatch'>
					</div>
					<div class='detail'>
						<p>".$row['details']."</p>
					</div>
					<div class='quantity'>
						<input type='number' name='number' id='amount".$i."'>
					</div>
					<div class='quantity' style='display:none'>
						<input type='text' name='id_product' value='".$row['product_id']."'>
					</div>
					<div class='add'>
						<input type='submit' name='add_button' value='add' id='button".$i."'>
					</div>
					<div class='total'>
						<p id='price".$i."'>".$row['price']."$</p>
					</div>
					</div>
					</form>";
					$i=$i+1;
				}
			}				

			?>

	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/common1.js"></script>
<!-- <a href='index.php?action=buy&do=add'>
						<input type='button' name='add_button' value='add' id='button".$i."'>
						</a> -->