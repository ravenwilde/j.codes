<?php include('perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<title>Projects</title>
	<?php perch_get_css(); ?>
</head>
<body>
    <?php perch_pages_navigation(array('levels'=>2)); ?>
    <h1><?php perch_content('Main heading'); ?></h1>

    <?php perch_content('Intro'); ?>

    <?php
    
    perch_content_create('Project', array(
      'template'   => 'project_item.html',
      'multiple'    => true,
      'edit-mode' => 'listdetail',
    ));

    perch_content_custom('Project', array(
      'template' => 'project_listing.html',
    ));

    ?>
    
    <?php perch_get_javascript(); ?>
</body>
</html>