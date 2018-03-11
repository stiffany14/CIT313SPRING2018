<?php include('elements/header.php'); ?>

<div class="container">
    <div class="page-header">

        <h1> The Login View </h1>

        <?php if (isset($error)) {?>
            <div class='alert alert-danger'>

        <?php echo $error; }?>

            </div>
            <form action="<?php echo BASE_URL ?>login/do_login" method="post" >
                <label id="username_label" for="email">Email:</label>
                <input id="email" type="text" name="email" required="email">
                <label id="password_label" type="password" for="password">Password:</label>
                <input id="password" type="password" name="password" required="password">
                <button id="login" class="form-button" type="submit" >Login</button>
            </form>

        </div>
    </div>

    <?php include('elements/footer.php'); ?>
