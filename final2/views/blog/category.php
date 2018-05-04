<?php include('views/elements/header.php');?>

    <div class="container">
        <div class="page-header">
            <h1>Category: <?php echo $title;?></h1>
        </div>

        <?php foreach($posts as $p){?>
            <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
            <p><?php echo "Date Posted: " . $p['date'];?></p>
            <p><?php echo "Written By: " . $p['uID'];?></p>
            <div style="margin-top:15px;" ><a href="<?php echo BASE_URL;?>ajax/get_post_content/?pID=<?php echo $p['pID'];?>" class="btn btn-primary  post-loader">View Content</a></div>
        <?php }?>
    </div>

<?php include('views/elements/footer.php');?>