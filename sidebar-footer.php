<?php
/**
* Template Sidebar Footer Area
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<h1 class="background"></h1>
<h1 class="access-title">アクセスランキング【月間】</h1>
<div class="sidebar-footer1" >
  <div class="container">
      <div class="col4 first">
        <?php dynamic_sidebar( 'footer-w-left' ); ?>
      </div>
      <div class="col4">
        <?php dynamic_sidebar( 'footer-w-center' ); ?>
      </div>
      <div class="col4">
        <?php dynamic_sidebar( 'footer-w-right' ); ?>
      </div>
  </div>
</div>
