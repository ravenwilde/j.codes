<?php 
	
	include('perch/runtime.php'); 

	perch_pages_navigation(array('levels'=>2));

	perch_layout('global.header', array(
			'title' => '',
			'h1_header' => 'jennifer.codes - homepage'
		));

	perch_content('Intro'); 

	perch_layout('global.footer'); 

?>