<form enctype="multipart/form-data" action="#" class="checkout" method="post" name="add_form">

    <div id="customer_details" class="col2-set">
        <div class="col-1">
            <div class="woocommerce-billing-fields">
                <h3>ADD PRODUCT</h3>
                <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
	                <label class="" for="billing_country">Catogories<abbr title="required" class="required">*<abbr>
	                </label>
	                <select class="country_to_state country_select" id="billing_country" name="catogory_name">
		                <option value="">Select a catetogy…</option>
		                <?php  
		                	if($result->num_rows > 0){
								    while($row = $result->fetch_assoc()){
								    		echo "<option value='".$row['title']."'>".$row['title']."</option>";
								    	}
							}
		                ?>
	                </select>
                </p>

                <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                    <label class="" for="billing_first_name">Name <abbr title="required" class="required">*</abbr></label>
                    <input type="text" id="billing_first_name" name="name" class="input-text ">
                </p>

                <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                    <label class="" for="billing_last_name">Description</label>
                    <input type="text" id="billing_last_name" name="description" class="input-text ">
                </p>
                <div class="clear"></div>

               <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                    <label for="billing_phone">Price</label>
                    <input type="text" id="billing_phone" name="price" class="input-text ">
                </p>

                <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                    <label class="" for="billing_address_1">Image</label>
                    <input type="file" name="avatar">
                </p>

                <p class="form-row form-row-last validate-required validate-phone">
                    <label for="billing_phone">Date Created</label>
                    <input type="date" name="date_created" class="input-text">
                </p>

            	<input type="submit" data-value="Place order" value="Submit" id="place_order" name="submit" class="button alt">
                </div>
            </div>
        </div>
    </form>