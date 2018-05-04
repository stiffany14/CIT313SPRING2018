<?php include('views/elements/header.php');

//see if numbers is empty
if (!isset($numbers)) {
    $numbers = "";
}

?>
<div class="container">
	<div class="page-header">
   <h1> Login </h1>
   <?php echo $numbers ?>
  </div>

    <?php if(isset($error)) { ?>
    <div class="alert alert-danger">
        <?php echo $error;?>
    </div>
<?php } ?>

    <form action="<?php echo BASE_URL?>login/<?php echo $task?>" method="post" onsubmit="editor.post()">

        <label for="email">Username/Email Address:</label>
        <input name="email" id="email" type="email" required/>

        <label for="password">Password:</label>
        <input name="password" id="password" type="password" required/>

    <br/>
    <button id="submit" type="submit" class="btn btn-primary" >Log In</button>
    </form>
</div>
<?php include('views/elements/footer.php');?>
