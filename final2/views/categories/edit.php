<?php include('views/elements/header.php');
?>

    <div class="container">
        <div class="page-header">
            <h1>Edit Category</h1>
        </div>
        <?php if($message){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message?>
            </div>
        <?php }?>
    </div>

<?php if($message){?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
    </div>
<?php }?>

    <div class="container">
        <form action="<?php echo BASE_URL?>categories/<?php echo $task?>" method="post" onsubmit="editor.post()">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $name;?>"/>
            <input type="hidden" name="categoryID" value="<?php echo $categoryID;?>" />
            <button class="btn btn-primary">Edit</button>
        </form>
    </div>

<?php include('views/elements/footer.php');?>