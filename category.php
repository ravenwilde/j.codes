<?php include('perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<title>Jennifer Codes</title>
	<?php perch_get_css(); ?>
</head>
<body>
<!-- category.php -->
    <?php    
    if (perch_get('cat')) {
      perch_category(perch_get('cat'),array(
        'template'=>'category_single.html'
      ));
      perch_content_custom('Project', array(
        'template' => 'project_listing.html',
        'page'=>'/projects.php',
        'category' => perch_get('cat'),
      ));
    } else {
      print_r('shit not working');
      perch_categories();
    }
    ?>
    
    <?php perch_get_javascript(); ?>
</body>
</html>