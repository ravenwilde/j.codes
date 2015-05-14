<?php 
	
	include('perch/runtime.php'); 

	perch_layout('global.header', array(
			'title' => '',
			'h1_header' => 'jennifer.codes - homepage'
		));

	perch_pages_navigation(array('levels'=>2));

	perch_content('Intro'); 

	perch_pages_navigation(array(
		  'navgroup' =>'skills',
		  'levels' => 1
		)); 

	perch_layout('global.footer'); 

?>