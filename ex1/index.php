<?php
include '_includes/config.php';
?>

<?php
include ABSOLUTE_PATH . '_includes/header.inc.php';
?>


	<div id="content">


<?php

$favorites = array('Shelby', 'Blue', 'National Treasure', 'Little Women', 'Instagram' ); ?>

<h1><?php echo $favorites[0]; ?></h1>

<?php

echo "<ul>";
foreach ($favorites as $f) {
	if( $f == 'Shelby' )continue; 
  echo "<li>". $f ."</li>";
}
echo "</ul>";

?>


<?php
include ABSOLUTE_PATH . '_includes/footer.inc.php';
?>
