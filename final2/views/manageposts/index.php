<?php include('views/elements/header.php'); ?>

<div class="container">
  <div class="page-header">
    <h1> Manage Posts</h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
    <div class="span8" style="margin-bottom: 25px;">
      <h3>Functions:</h3>
      <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add a Post</a>
      <a href="<?php echo BASE_URL;?>categories/index" class="btn btn-primary">Manage Categories</a>
    </div>
  </div>
</div>

<div class="container">
  <?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
    <p><?php echo "Date Posted: " . $p['date'];?></p>
    <p><?php echo "Written By: " . $p['uID'];?></p>
    <p><?php echo "Category: " . $p['categoryID'];?></p>
    <form action="<?php echo BASE_URL?>manageposts/deletePost" method="post" onsubmit="editor.post()">
      <input type="hidden" name="pID" value="<?php echo $p['pID'];?>"/>
      <a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" class="btn btn-primary">View Post</a>
      <a href="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID'];?>" class="btn btn-primary">Edit Post</a>
      <button type="submit" class="btn btn-primary">Delete Post</button>
    </form>
  <?php }?>
</div>
<?php include('views/elements/footer.php');?>



