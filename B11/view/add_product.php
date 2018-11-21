	<!-- <form name="add_form" action="#" method="post"  enctype="multipart/form-data">
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
	</form> -->


<form role="form" name="add_form" action="#" method="post"  enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <?php echo $errname ?>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <?php echo $errprice ?>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <?php echo $errdes?>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <?php echo $errimage ?>
            <input type="file" id="exampleInputFile" name="avatar">

            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="input-group date">
        	<?php echo $errdate ?>
        	<div>
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="date" class="form-control pull-right" id="datepicker" name="date">
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
 </form>
   

