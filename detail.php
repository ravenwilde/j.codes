<?php include('perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title><?php perch_pages_title(); ?></title>
	<?php perch_page_attributes(); ?>
	<?php perch_get_css(); ?>
</head>
<body>
<!-- detail.php -->
    <?php perch_pages_navigation(array('levels'=>2)); ?>

	<?php
	    perch_content_custom('Portfolio', array(
	      'page' => '/portfolio.php',
	      'template' => 'portfolio_item.html',
	      'filter' => 'slug',
	      'match' => 'eq',
	      'value' => perch_get('s'),
	      'count' => 1,
	    ));
    ?>

    <?php perch_get_javascript(); ?>
</body>
</html>