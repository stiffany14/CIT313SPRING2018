<?php include('elements/header.php'); ?>

<div class="container">

    <div class="page-header">

        <h1> The Login View </h1>

        <form action="<?php echo BASE_URL?>login/<?php echo $task?>" method="post" onsubmit="editor.login()">

            <label id="username_label" for="username">Username:</label>

            <input id="username" type="text" name="username">

            <label id="password_label" type="password" for="password">Password:</label>

            <input id="password" type="password" name="password"> <br>

            <button id="login" class="form-button" type="submit">Login</button>
        </form>

    </div>
</div>
<?php include('elements/footer.php'); ?>
