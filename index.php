<?php 	
	include('perch/runtime.php'); 
?>
<?php perch_layout('global.header', array(
	'body-class'=>'homepage',
)); ?>
<div class="colorbar">
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
</div>
<section id="hero">
	<div class="container">
		<div class="vertical-center">
			<?php perch_content('Hero Photo'); ?>
			<h1><span>Hi!</span> my name is <span>Jennifer A. Scroggins</span></h1>
		</div>
		<p>I am a web designer &amp; developer <span>located in Ann Arbor, MI</span></p>
	</div>
</section>
<section id="skill-links">
	<div class="container">
		<h2>I help build the internet with...</h2>
	<?php 
		perch_pages_navigation(array(
			  'navgroup' =>'skills',
			  'levels' => 1
			));
	?>
	</div>
</section>
<section id="project-links">
	<div class="container">
		<h2>... and I've got some stuff to share with you!</h2>
	<?php 
		 perch_content_custom('Project', array(
	      'page' => '/projects.php',
	      'template' => 'project_listing.html'
	    ));
	?>
	<p class="all-projects-link"><a href="projects">View All Projects</a></p>
	</div>
</section>
<section id="contact-info">
	<div class="container">
		<h2>You Can Contact Me Through All The Usual Ways...</h2>
	</div>
</section>
<?php perch_layout('global.footer'); ?>