<?php include('perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<title>Portfolio</title>
	<?php perch_get_css(); ?>
</head>
<body>
    <h1><?php perch_content('Main heading'); ?></h1>

    <?php perch_content('Intro'); ?>

    <?php
    
    perch_content_create('Portfolio', array(
      'template'   => 'portfolio_item.html',
      'multiple'    => true,
      'edit-mode' => 'listdetail',
    ));

    perch_content_custom('Portfolio', array(
      'template' => 'portfolio_listing.html',
    ));

    ?>
    
    <?php perch_get_javascript(); ?>
</body>
</html>