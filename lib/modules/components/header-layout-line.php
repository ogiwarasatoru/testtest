<?php
/**
* Header Layout Line
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<header id="header-wrapper" class="clearfix" itemscope itemtype="http://schema.org/WPHeader">
  <!--top bar-->
  <div class="top-bar">
    <div class="container">
      <div class="col12">
      <?php emanon_header_description(); ?>
      </div>
    </div>
  </div>
  <!--end top bar-->
  <!--header-->
  <div class="header header-col-line">
    <div class="container">
      <div class="col4 first">
      <?php emanon_header_logo(); ?>
      </div>
      <div id="gnav" class="col8" >
        <nav id="menu">
        <?php wp_nav_menu( array ( 'theme_location' => 'global-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'global-nav global-nav-line') ); ?>
        </nav>
      </div>
    </div>
    <!--mobile menu-->
    <div class="modal-menu">
      <a href="#modal-global-nav" class="modal-gloval-btn">
        <span class="modal-menutxt">Menu</span>
        <span class="modal-gloval-icon">
          <span class="modal-gloval-icon-bar"></span>
          <span class="modal-gloval-icon-bar"></span>
          <span class="modal-gloval-icon-bar"></span>
        </span>
      </a>
    </div>
    <?php emanon_header_mb_global_nav(); ?>
    <!--end mobile menu-->
  </div>
  <!--end header-->
</header>
<?php emanon_header_scroll_nav(); ?>