<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php
echo "<p> Date Posted: " . $date . "</p>";
echo "<p>" . $content . "</p>";
echo "<p> Written By: " . $uID . "</p>";

?>
Category: <a href="<?php echo BASE_URL?>blog/category/<?php echo $categoryID;?>"><p><?php echo $categoryID;?></p></a>

    <?php
if ($u->isAdmin()) {
    echo "<br/>";
    echo "<a href='#' class='btn btn-primary' style='margin-right: 5px;'>" . "Edit Post" . "</a>";
    echo "<a href='#' class='btn btn-primary'>" . "Delete Post" . "</a>";
}
?>
</div>
<div class="container">
    <h3>View Comments</h3>
    <?php foreach($comments as $c) {?>
    <div>
    <p><?php echo $c['commentText'];?></p>
    <p><?php echo $c['uID'];?></p>
    <p><?php echo $c['date'];?></p>
        <!-- if the user is an admin, they can delete the comment -->
        <?php
        if ($u->isAdmin()) {
            echo "<a href='#' class='btn btn-primary'>" . "Delete Comment" . "</a>";
        }
        ?>
    </div>
    <?php }?>
</div>
<div class="container">
    <?php
    if($u->isRegistered()) {

        ?>
        <form action="<?php echo BASE_URL?>blog/addComment" method="post" onsubmit="editor.post()">

            <label for="commentText"></label>
            <textarea name="commentText" style="width:556px;height: 150px"></textarea>

            <input type="hidden" name="pID" value="<?php echo $pID?>"/>
            <input type="hidden" name="uID" value="<?php echo $_SESSION['uID']?>"/>
            <input name="date" id="date" size="16" type="hidden" value="<?php echo date("Y-m-d H:i:s")?>">
            <br/>
            <button id="submit" type="submit" class="btn btn-primary" >Comment</button>
        </form>

        <?php
    } else {
        ?>

        <h3>Please login to post comments</h3>
        <a class="btn btn-primary" href="<?php echo BASE_URL?>login/">Login</a>
    <?php }?>
</div>

<?php include('views/elements/footer.php');?>