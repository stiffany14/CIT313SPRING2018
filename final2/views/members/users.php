<?php include('views/elements/header.php');?>
<?php
if( is_array($user) ) {
    extract($user);
}
?>

    <div class="container">
        <div class="page-header">

            <h1>Member: <?php echo $uID;?></h1>
        </div>

        <?php
        echo "Name: " . $first_name . " " . $last_name . "<br/>";
        echo "Email: " . $email;
        ?>

    </div>

<?php include('views/elements/footer.php');?>