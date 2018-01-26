<?php
	include '_includes/webconfig.php';
?>


<?php
include ABSOLUTE_PATH . '_includes/header.inc.php';
?>

<?php
	//this page allows users to put items into a shopping cart
  include ABSOLUTE_PATH . 'classes/product.class.php';
	include ABSOLUTE_PATH . 'classes/fruit_product.class.php';
	include ABSOLUTE_PATH . 'classes/veggie_product.class.php';
	session_start();
?>

<body>
<p><b>Your Cart</b></p>

<?php
	//get the cart stored in session
	$aryCartArray = unserialize($_SESSION['aryCartArray']);


	//get the product array stored in session
	$aryProductsArray = unserialize($_SESSION['aryProductArray']);

	//for each item in the cart array, loop through and write out the quantity and item name

	for ($x=0; $x < count($aryCartArray); $x++) {

		$aryCartItemArray = $aryCartArray[$x];

		//find the corresponding product in the product array

    $thisProduct = $aryProductsArray[$aryCartItemArray[0]];

		echo "<b>" . $thisProduct->product_name . "</b>" . " Qty: " . $aryCartItemArray[1] . "<br />";

	}


?>

<br />
<br />
<br />
<a href="index.php">Start all over again</a><br />
<i>This will reset your inventory.</i><strong></strong>

<?php
include ABSOLUTE_PATH . '_includes/footer.inc.php';
?>
