<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title><?php perch_pages_title(); ?></title>
	<?php perch_page_attributes(); ?>
	<?php perch_get_css(); ?>
</head>
<body>
    <?php perch_pages_navigation(array('levels'=>2)); ?>

    <h1><?php perch_content('Project Title'); ?></h1>

    <?php perch_content('Intro'); ?>

    <?php perch_categories(); ?>

    <?php perch_get_javascript(); ?>
</body>
</html>