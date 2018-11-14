	<form name="add_form" action="#" method="post"  enctype="multipart/form-data">
		<p>Name:
			<?php echo $errname ?>
			<input type="text" name="name">
		</p>
		<p>Price    :
			<?php echo $errprice ?>
			<input type="text" name="price" >
		</p>
		<p>Desc    :
			<?php echo $errdes ?>
			<input type="text" name="description">
		</p>
		<p>Image:
			<?php echo $errimage ?>
			<input type="file" name="avatar" style="display: inline">
		</p>
		<p>Date :
			<?php echo $errdate ?>
			<input type="date" name="date" >
		</p>
		<input type="submit" name="submit" value="submit">
	</form>
