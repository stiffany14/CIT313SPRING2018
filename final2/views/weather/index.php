<?php include('views/elements/header.php');?>

    <div class="container">
        <div class="page-header">
            <h1> Weather for <?php echo $weather->current_observation->display_location->full;?> </h1>
        </div>
        <h4><?php echo $weather->current_observation->weather;?>&nbsp;<img src="<?php echo $weather->current_observation->icon_url;?>"/>
        <h4>Temperature: <?php echo $weather->current_observation->temperature_string;?></h4>
    </div>



<?php include('views/elements/footer.php');?>
