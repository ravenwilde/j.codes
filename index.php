<?php 
	
	include('perch/runtime.php'); 

	perch_layout('global.header', array(
			'h1_header' => 'jennifer.codes - homepage'
		));

?>

    <?php perch_content('Intro'); ?>
    
    <?php perch_get_javascript(); ?>
</body>
</html>