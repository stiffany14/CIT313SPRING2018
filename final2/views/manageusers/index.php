<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Manage Users</h1>
        </div>

        <?php if($message){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message?>
            </div>
        <?php }?>

        <?php foreach($users as $u){?>

                <h2><?php echo $u['first_name'] . " " . $u['last_name'] ?></h2>

<table>
    <tr>
        <td>
            <form action="<?php echo BASE_URL?>manageusers/delete" method="post" onsubmit="editor.post()">
                <?php if($u['user_type'] == 2) {
                  echo "<button class='btn btn-primary'>Delete</button>";
                    }
                    ?>
                <input type="hidden" name="uID" value="<?php echo $u['uID'];?>"/>
            </form>
        </td>
        <td>
            <form action="<?php echo BASE_URL?>manageusers/approve" method="post" onsubmit="editor.post()">
                <?php if($u['active'] == 0) {
                    echo "<button class='btn btn-primary'>Approve</button>";
                }
                ?>
                <input type="hidden" name="uID" value="<?php echo $u['uID'];?>"/>
            </form>
        </td>
    </tr>
</table>
        <?php }?>
    </div>


<?php include('views/elements/footer.php');?>