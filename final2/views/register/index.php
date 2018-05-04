<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Register</h1>

            <?php if($message){?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $message?>
                </div>
            <?php }?>

            <form id="signup" action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">

                <fieldset>
                    <legend>Register Today!</legend>
                    <label for="first_name">First Name: <font color="#FF0000">*</font></label>
                    <input type="text" id="first_name" name="first_name" value="" minlength="2" maxlength="20" required="first_name" />
                    <br />

                    <label for="last_name">Last Name: <font color="#FF0000">*</font></label>
                    <input type="text" class="txt" id="last_name" name="last_name" value="" minlength="2" maxlength="20" required="last_name" />
                    <br />

                    <label for="email">E-mail Address: <font color="#FF0000">*</font></label>
                    <input type="email" class="txt" id="email" name="email" value="" maxlength="100" required="email" />
                    <br />

                    <label for="password">Password: <font color="#FF0000">*</font></label>
                    <input type="password" class="txt" id="password" name="password" value="" maxlength="100" required="password" />

                    <label for="password2">Confirm Password: <font color="#FF0000">*</font><span id="matchPass" class="error"> Please ensure passwords match.</span></label>
                    <input type="password" class="txt" id="password2" name="password2" value="" maxlength="100" required="password" />

                    <br />

                    <input type="hidden" name="uID" value=""/>
                    <input type="hidden" name="active" value="0"/>

                    <button id="btnSignUp" type="submit" class="btn btn-primary" >Sign Up</button>
                </fieldset>
            </form><p><a href="<?php echo BASE_URL?>">Back to home page</a></p>
        </div>
    </div>


<?php include('views/elements/footer.php');?>