<?php
require_once 'application/config.php';
include('views/elements/header.php');
?>

<div class="container">
    <div class="page-header">
        <h1> Latest News from <?php echo $rss_title->title; ?> </h1>
    </div>
        <?php
        if (isset($_GET['Message'])) {
            echo $_GET['Message'];
        }
        ?>

    <?php

        foreach($story_items as $item){
        echo '<h3><a href="'.$item->link.'">'. $item->title . '</a></h3>';
            echo '<i style="font-size:.9em;">'.$item->pubDate = date('F j, Y g:ia', strtotime($item->pubDate)).'</i>';
            echo '<p>'. $item->description."</p>";
        }
    ?>
</div>
<?php include('views/elements/footer.php'); ?>
