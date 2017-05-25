<?php
/**
* Breadcrumb
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>

<?php 

  global $post;

  echo '<!--breadcrumb-->' . "\n";
  echo '<nav class="col12 breadcrumb clearfix">' . "\n";
   echo '<ol>' . "\n";
   echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><i class="fa fa-home"></i><a href="'. home_url() .'/" itemprop="url"><span itemprop="title">'. get_bloginfo('name') .'</span></a></li>' . "\n";

    if( is_singular( 'post' ) ) {
      $categories = get_the_category( $post->ID );
      $cat = $categories[0];
      if( $cat -> parent != 0 ) {
        $ancestors = array_reverse( get_ancestors( $cat -> cat_ID, 'category' ) );
        foreach( $ancestors as $ancestor ) {
           echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
           echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link( $ancestor ).'" itemprop="url"><span itemprop="title">'. get_cat_name( $ancestor ). '</span></a></li>' . "\n";
        }
      }
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link( $cat -> term_id ). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a></li>' . "\n";
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. $post -> post_title .'</span></li>' . "\n";

    } else if( is_page() ){
      if( $post -> post_parent != 0 ) {
        $ancestors = array_reverse( get_post_ancestors( $post -> ID ) );
        foreach( $ancestors as $ancestor ) {
           echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
           echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink( $ancestor ).'" itemprop="url"><span itemprop="title">'. get_the_title( $ancestor ) .'</span></a></li>' . "\n";
        }
      }
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. $post -> post_title .'</span></li>' . "\n";
  
    } else if( is_category() ) {
      $cat = get_queried_object();
      if( $cat -> parent != 0 ) {
        $ancestors = array_reverse( get_ancestors( $cat -> cat_ID, 'category' ) );
        foreach( $ancestors as $ancestor ){
           echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
           echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link( $ancestor ) .'" itemprop="url"><span itemprop="title">'. get_cat_name( $ancestor ) .'</span></a></li>' . "\n";
        }
      }
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. $cat-> cat_name . '</span></li>' . "\n";

    } else if( is_tag() ) {
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. single_tag_title( '' , false ). '</span></li>' . "\n";

    } else if( is_date() ) {
      if( is_day() ) {
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link( get_the_time( 'Y' ) ) . '" itemprop="url"><span itemprop="title">' . get_the_time( 'Y' ).__( 'Year', 'emanon' ). '</span></a></li>' . "\n";

       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ). '" itemprop="url"><span itemprop="title">'. get_the_time( 'm' ) .__( 'Month', 'emanon' ).'</span></a></li>' . "\n";

       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. get_the_time( 'd' ) .__( 'Day', 'emanon' ).'</span></li>' . "\n";
      } else if( is_month() ) {
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link( get_the_time( 'Y' ) ) .'" itemprop="url"><span itemprop="title">'. get_the_time( 'Y' ).__( 'Year', 'emanon' ). '</span></a></li>' . "\n";
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. get_the_time( 'm' ) .__( 'Month', 'emanon' ).'</span></li>' . "\n";
      } else {
       echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
       echo '<li><span>'. get_the_time( 'Y' ).__( 'Year', 'emanon' ).'</span></li>' . "\n";
      }

    } elseif ( is_author() ) {
      echo '<li><i class="fa fa-angle-right"></i></li>' . "\n";
      echo '<li><span>'. get_the_author_meta( 'display_name' ).'</span></li>' . "\n";
    }

   echo '</ol>' . "\n";
   echo '</nav>' . "\n";
   echo '<!--end breadcrumb-->' . "\n";

?>