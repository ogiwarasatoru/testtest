<?php
/**
* Google Tag Manager (noscript)
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.3
*/
  $tag_manage_id = get_theme_mod( 'tag_manage_id', '' );
?>
<?php if (!is_user_logged_in()) :?>
<!--google tag manager (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id='<?php echo esc_js( $tag_manage_id ) ;?>'"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--end google tag manager (noscript)-->
<?php endif; ?>
