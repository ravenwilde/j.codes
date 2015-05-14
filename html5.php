<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); 

?>
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

    <h1><?php perch_content('Main Header'); ?></h1>

    <?php perch_content('Intro'); ?>

	<?php perch_content('Gist Links'); ?>

    <?php 
		perch_content_create('Skill', array(
	      'template'  => 'category_skill.html',
	      'edit-mode' => 'singlepage',
			));

		perch_content_custom('Project', array(
	        'template' => 'project_listing.html',
	        'page'=>'/projects.php',
	        'category' => 'skills/html5',
      		));
    ?>



    <?php perch_get_javascript(); ?>
</body>
</html>