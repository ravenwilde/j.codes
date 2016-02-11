<nav class="global-nav">
	<div class="container">
    	<?php perch_pages_navigation(array('levels'=>1)); ?>	
		<a href="#" id="navicon" class="menu-toggle">Menu</a>
	</div>
</nav>
<nav class="global-nav-skills" id="subNav">
	<div class="container">
		<?php 
			perch_pages_navigation(array(
				  'navgroup' =>'skills',
				  'levels' => 1
				));
		?>
	</div>
</nav>