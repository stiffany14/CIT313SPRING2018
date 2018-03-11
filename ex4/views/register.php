<?php include('elements/header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1> The Register View </h1>

        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.user()">
            <label id="firstname_label" for="firstname">First Name:</label>
            <input id="firstname" type="text" name="firstname">
            <label id="lastname_label" for="lastname">Last Name:</label>
            <input id="lastname" type="text" name="lastname">
            <label id="email_label" for="email">Email:</label>
            <input id="email" type="text" name="email">
            <label id="password_label" type="password" for="password">Password:</label>
            <input id="password" type="password" name="password">
            <button id="submit" class="form-button" type="submit">Register</button>
        </form>

    </div>
</div>
<?php include('elements/footer.php'); ?>
