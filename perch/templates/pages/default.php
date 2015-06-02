<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); 
  perch_layout('global.header'); 
  perch_layout('global.nav');
  ?>
    <h1><?php perch_content('Main heading'); ?></h1>

    <?php perch_content('Intro'); ?>

<?php perch_layout('global.footer'); ?>