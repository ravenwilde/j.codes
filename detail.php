<?php 
	include('perch/runtime.php');   
	perch_layout('global.header', array(
    'body-class'=>'project-item',
  )); 
	perch_layout('global.nav');
  perch_content_custom('Project', array(
    'page' => '/projects.php',
    'template' => 'project_item.html',
    'filter' => 'slug',
    'match' => 'eq',
    'value' => perch_get('s'),
    'count' => 1,
  ));
  perch_layout('global.footer'); 
?>