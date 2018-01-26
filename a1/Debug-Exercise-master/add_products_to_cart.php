<?php
	include '_includes/webconfig.php';
?>


<?php
include ABSOLUTE_PATH . '_includes/header.inc.php';
?>


<?php
//This page is adding each inventory to the inventory array.  Once it's finished, it will redirect you to the Shopping page.
	//this page stores the requested items in a shopping cart array, which is stored in Session
  include ABSOLUTE_PATH . 'classes/product.class.php';
	include ABSOLUTE_PATH . 'classes/fruit_product.class.php';
	include ABSOLUTE_PATH . 'classes/veggie_product.class.php';
	session_start();

	//unset the current cart array in session and start fresh
	unset($_SESSION['aryCartArray']);

	$aryCartArray = array();

	//retrieve the inventory array from session
	$aryProductsArray = unserialize($_SESSION['aryProductArray']);



	for ($x=0; $x<count($aryProductsArray); $x++) {

		//first, see if the product's quantity has a value
		if (!empty($_POST['quantity' . $x]))  {

			//product's quantity is not empty, so this item should be placed in the cart.

			//to do this, we will create a local array that contains the product_id and the quantity, and then push that ARRAY OBJECT onto the $aryCartArray
			//you will essentially end up with an array (cart) of arrays (items in the cart)

			$aryCartItemArray = array($x, $_POST['quantity' . $x]);

			//add cart item array to the cart array
			array_push($aryCartArray, $aryCartItemArray);

		}

	}

	//if the cart array is not empty, put it into the Session
	$_SESSION['aryCartArray'] = serialize($aryCartArray);

	session_write_close();


	//send user to the view_cart.php screen
	header( "Location: view_cart.php" );
?>

<?php
include ABSOLUTE_PATH . '_includes/footer.inc.php';
?>
