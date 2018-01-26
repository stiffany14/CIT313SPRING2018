<?php
	include '_includes/webconfig.php';
?>


<?php
include ABSOLUTE_PATH . '_includes/header.inc.php';
?>



<body>



<div id="wrapper">

	<h2>To begin setting up your produce stand, input the products that you would like to offer.</h2>

	<div class="form-container">

	<form action="add_products_to_inventory.php" method="post">

    <?php
		//create a loop that writes a form to allow up to 8 produce items to be added

		for ($x = 0; $x <= 7; $x++) {
	?>
    <fieldset>
		<legend>Product Details: Product <?php echo $x ?></legend>
			<div>
				<label for="productname<?php echo $x ?>">Product Name</label>
				<input id="productname<?php echo $x ?>" type="text" name="productname<?php echo $x ?>" value="" />
			</div>

			<div>
				<label for="producetype<?php echo $x ?>">Produce Type</label>
				<select id="producetype<?php echo $x ?>" name="producetype<?php echo $x ?>">
					<optgroup label="Type of Produce">
						<option value="f">Fruit</option>
						<option value="v">Vegetable</option>
					</optgroup>
				</select>
			</div>

            <div>
				<label for="pricetype<?php echo $x ?>">Pricing Type</label>
				<select id="pricetype<?php echo $x ?>" name="pricetype<?php echo $x ?>">
					<optgroup label="Pricing Structure">
						<option value="1">Per pound</option>
						<option value="2">Each</option>
					</optgroup>
				</select>
			</div>

			<div>
				<label for="productprice<?php echo $x ?>">Product Price</label>
				<input id="productprice<?php echo $x ?>" name="productprice<?php echo $x ?>" type="text" size="10" />
			</div>
	</fieldset>

    <?php
}
	?>



	<div class="buttonrow">
		<input type="submit" value="Save" class="button" />

		<input type="button" value="Discard" class="button" />
	</div>

	</form>

	</div><!-- /form-container -->

	<?php
	include ABSOLUTE_PATH . '_includes/footer.inc.php';
	?>
