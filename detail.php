<?php 
	include('perch/runtime.php');   
	perch_layout('global.header'); 
  	perch_layout('global.nav');
  	?>
	<?php
	    perch_content_custom('Project', array(
	      'page' => '/projects.php',
	      'template' => 'project_item.html',
	      'filter' => 'slug',
	      'match' => 'eq',
	      'value' => perch_get('s'),
	      'count' => 1,
	    ));
    ?>
<?php perch_layout('global.footer'); ?>