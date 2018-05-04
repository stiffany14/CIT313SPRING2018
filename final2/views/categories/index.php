<?php include('views/elements/header.php');
?>

    <div class="container">
        <div class="page-header">
            <h1>Manage Categories</h1>
        </div>

<?php if($message){?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
    </div>
<?php }?>

    <div class="container">
        <?php foreach($categories as $c){?>

            <!-- unsure why it's only giving me the first letter of each category -->
            <h3><?php echo $c['name'];?></h3>
        <form action="<?php echo BASE_URL?>categories/edit/<?php echo $c['categoryID'];?>" method="post" onsubmit="editor.post()">
            <input type="hidden" value="<?php echo $c['categoryID'];?>"/>
            <input type="hidden" name="name" value="<?php echo $c['name'];?>"/>
            <button class="btn btn-primary" type="submit">Edit Category</button>
        </form>
        <?php }?>
        <br/>
        <form action="<?php echo BASE_URL?>categories/addCategory" method="post" onsubmit="editor.post()">
            <p style="margin-top: 10px;">Add A New Category</p>
            <label for="categoryName"></label>
            <input name="categoryName" style="margin-bottom: 5px;"/>
            <br/>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>

<?php include('views/elements/footer.php');?>