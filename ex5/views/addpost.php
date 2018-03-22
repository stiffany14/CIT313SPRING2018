<?php include('elements/header.php');?>

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
        <form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>Title</label>
          <input type="text" class="span6" name="post_title" value="<?php echo $title; ?>">
          <label>Date</label>
          <input type="text" class="span6" name="post_date" value="<?php if($date){ echo $date;}else{echo date('o-m-d h:i:s');}?>">
          <label>Category</label>
<!--          <select>
              <?php  if (is_array($categories)) { 
                foreach ($categories as $id => $category){ ?>
              <option value='<?php echo $id ?>'><?php echo $category; ?></option>
              <?php }} ?>
          </select>-->
          <select name="post_category">
              <option value="1">Techstuff</option>
              <option value="2">Weather</option>
              <option value="3">Sports</option>
          </select>
     			<label>Content</label>
          <textarea id="tinyeditor" name="post_content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <input type="hidden" name="uID" value="2"/>
          <button id="add-post" type="submit" class="form-button" >Submit</button>
        </form>

        
      </div>
    </div>
</div>
<?php include('elements/footer.php');?>

