<form enctype="multipart/form-data" action="#" class="checkout" method="post" name="add_form">
	<p  class="form-row form-row-first validate-required">
        <label class="" for="billing_first_name">Category</label>
        <input type="text" name="category" class="input-text ">
        <?php echo $errcate ?>
        <input type="submit" data-value="Place order" value="Submit" name="submit" class="button alt">
    </p>
</form>