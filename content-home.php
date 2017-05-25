<?php
/**
* Content Home
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>

  <div class="clearfix">
  <!--loop of article-->
  <?php while ( have_posts() ) : the_post() ?>
  <article class="archivea-list">
    <?php emanon_content_entry_thumbnail(); ?>
    <h3 class="archive-header-title"><a class="test" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <header class="archive-header">
      <?php emanon_entry_meta_list(); ?>
      <!-- タイトル読み込み　home画面にて-->
 <!--   <h3 class="archive-header-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>-->
    <!-- メタ說明のコード -->
  <!--<?php if ( emanon_excerpt() ): ?> 
  <?php the_excerpt(); ?>
  <?php endif; ?>
  <?php emanon_read_more(); ?>-->
      
    </header>
  </article>
  <?php endwhile; ?>
  <!--end loop of article-->
</div>
</div>
<?php the_posts_pagination( array( 'prev_text' => __( 'Previous', 'emanon' ), 'next_text' => __( 'Next', 'emanon' ), ) ); ?>
