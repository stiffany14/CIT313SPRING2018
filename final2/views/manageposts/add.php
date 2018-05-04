<?php include('views/elements/header.php');

?>

<div class="container">
  <div class="page-header">
    <h1> the Add Post View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
    <div class="span8">
      <form action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()" id="addPostForm">
        <label>Title</label>
        <input type="text" class="span6" name="post_title" value="<?php echo $title ?>" required>
        <label for="date">Date</label>
        <input name="date" id="date" size="16" type="date" value="<?php echo date("Y-m-d H:i:s")?>" required>
        <label for="category">Category</label>
        <select name="category" id="category">
          <option value="1">Techstuff</option>
          <option value="2">Weather</option>
          <option value="3">Sports</option>
        </select>
        <label for="post_content">Content</label>
        <textarea name="post_content" style="width:556px;height: 200px" required><?php echo $content ?></textarea>
        <br/>
        <input type="hidden" name="pID" value="<?php echo $pID?>"/>
        <input type="hidden" name="uID" value="<?php echo $_SESSION['uID']?>"/>
        <button id="submitAdd" type="submit" class="btn btn-primary" >Submit</button>
      </form>


    </div>
  </div>
</div>
<?php include('views/elements/footer.php');?>



