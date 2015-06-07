<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); 
	perch_layout('global.header', array(
		'body-class'=>'skill',
	)); 
	perch_layout('global.nav');
	?>
    <header>
    	<div class="container">
		    <h1><?php perch_content('Main Header'); ?></h1>
		</div>
	</header>
	<section>
		<div class="container">
		    <?php perch_content('Intro'); ?>
			<?php perch_content('Gist Links'); ?>		
		</div>
	</section>
	<section>
		<div class="container">
		    <?php 
				perch_content_create('Skill', array(
			      'template'  => 'category_skill.html',
			      'edit-mode' => 'singlepage',
					));
				perch_content_custom('Skill', array(
					'template' => 'category_skill.html'	
					));

				perch_content_custom('Project', array(
			        'template' => 'project_listing.html',
			        'page'=>'/projects.php',
			        'category' => 'skills/php',
		      		));
		    ?>
		</div>
	</section>
<?php perch_layout('global.footer'); ?>