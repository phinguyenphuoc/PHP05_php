
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<div class="wrapper">
		<h1>SHOPPING CART</h1>
		<form name="login_form" action="#" method="post"  enctype="multipart/form-data">
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
					echo "<div class='product'>
							<div class='image'>
						<img src='uploads/".$row['image']."' alt='applewatch'>
					</div>
					<div class='detail'>
						<p>".$row['details']."</p>
					</div>
					<div class='quantity'>
						<input type='number' name='number' id='amount".$i."'>
					</div>
					<div class='add'>
						<input type='button' name='add_button' value='add' id='button".$i."'>
					</div>
					<div class='total'>
						<p id='price".$i."'>0$</p>
					</div>
					</div>";
					$i=$i+1;
				}
			}				

			?>
		</form>

	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/common1.js"></script>
