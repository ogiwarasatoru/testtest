<?php
/**
* Content Archive
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<div class="clearfix">
  <!--loop of article-->
  <?php while ( have_posts() ) : the_post() ?>
  <article class="archive-list">
    <?php emanon_content_entry_thumbnail(); ?>
    <header class="archive-header">
      <?php emanon_entry_meta_list(); ?>

    </header>
  </article>
  </div>
    <?php endwhile; ?>
  <!--end loop of article-->

<?php the_posts_pagination( array( 'prev_text' => __( 'Previous', 'emanon' ), 'next_text' => __( 'Next', 'emanon' ), ) ); ?>
