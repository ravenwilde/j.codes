<nav class="global-nav">
	<div class="container">
    	<?php perch_pages_navigation(array('levels'=>1)); ?>
	</div>
</nav>
<nav class="global-nav-skills">
	<div class="container">
		<a href="#" class="menu-toggle">Skills -></a>
		<?php 
			perch_pages_navigation(array(
				  'navgroup' =>'skills',
				  'levels' => 1
				));
		?>
	</div>
</nav>