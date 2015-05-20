<?php 
  include('perch/runtime.php');   
  perch_layout('global.header'); 
  perch_layout('global.nav');      
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
  perch_layout('global.footer'); 
?>