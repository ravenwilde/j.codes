<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); 
  perch_layout('global.header'); 
  perch_layout('global.nav');
  ?>
    <header>
      <div class="container">
        <h1><?php perch_content('Main heading'); ?></h1>
        <?php perch_content('Intro'); ?>  
      </div>
    </header>
    
    <?php
      perch_content_create('Project', array(
        'template'   => 'project_item.html',
        'multiple'    => true,
        'edit-mode' => 'listdetail',
      ));
      perch_content_custom('Project', array(
        'template' => 'project_listing.html',
      ));
    ?>
       
<?php perch_layout('global.footer'); ?>