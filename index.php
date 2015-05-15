<?php 	
	include('perch/runtime.php'); 
	perch_layout('global.header', array(
			'title' => ''
		));
?>
<section id="hero">
	<div class="container">
		<h1><span>Hi!</span> my name is <span>Jennifer A. Scroggins</span></h1>
		<p>I am a web designer &amp; developer located in Ann Arbor, MI</p>
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
		<h2>I have some projects I'd like to share!</h2>
	<?php 
		 perch_content_custom('Project', array(
	      'page' => '/projects.php',
	      'template' => 'project_listing.html'
	    ));
	?>
	</div>
</section>
<?php
	perch_layout('global.footer'); 
?>