
<?php include('views/elements/header.php'); ?>
<?php
if (is_array($post)) {
    extract($post);
} ?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
            <p class="post-meta-data"><?php echo $date = date('F j, Y', strtotime($date)) . ' by: ' . $first_name . ' ' . $last_name . ' in: '. $name; ?></p>
        </div>

    <?php echo $content; ?>

    </div>

<?php include('views/elements/footer.php'); ?>