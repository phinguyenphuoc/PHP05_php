	<form name="edit_form" action="#" method="post" enctype="multipart/form-data">
		<div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>

            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>

            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>

            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>

            <input type="file" name="avatar" accept="image/*">

            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="input-group date">

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

		<!-- <p>Name:
			<input type="text" name="name">
		</p>
		<p>Price:
			<input type="text" name="price">
		</p>
		<p>Description:
			<input type="text" name="description">
		</p>
		<p>Image:
			<input type="file" name="avatar" accept="image/*">
		</p>
		<p>Date
			<input type="date" name="date">
		</p>
		<input type="submit" name="submit" value="submit"> -->