
<?php
/**
* Template Home
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

get_header(); ?>

<?php emanon_firstview(); ?>

<?php // フロントページレイアウトの表示判定
  $display_entry_section = get_theme_mod( 'display_entry_section', 'true' );
  $front_layout_type = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
  if ( $front_layout_type == 'right_sidebar' && $display_entry_section ) {
    get_template_part( 'blog-templates/front/front-right-sidebar');
  }
  if ( $front_layout_type == 'left_sidebar' && $display_entry_section ) {
    get_template_part( 'blog-templates/front/front-left-sidebar' );
  }
  if ( $front_layout_type == 'no_sidebar' && $display_entry_section ) {
    get_template_part( 'blog-templates/front/front-no-sidebar' );
  }
?>

<?php get_footer(); ?>


<div class="readmore-button-box">
   <a class="read-link" target="blank" href="http://zebramaison.com/wp1/">▶read more</a>
</div>

<h2 class="category-header">▼アイテム別で探す</h2>

<div class="ch-select">
  <a href="https://www.google.co.jp/search?q=%E3%83%88%E3%83%83%E3%83%97%E3%82%B9&rlz=1C5CHFA_enJP726JP726&oq=%E3%83%88%E3%83%83%E3%83%97%E3%82%B9&aqs=chrome..69i57j0l5.1165j0j7&sourceid=chrome&ie=UTF-8#q=%E3%83%88%E3%83%83%E3%83%97%E3%82%B9+%E3%83%A1%E3%83%B3%E3%82%BA" target="blank"><img class="ch-img" alt="t-shirt-img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/18619968_211960009316901_8398618108315062320_n.jpg?oh=89664eb3fa18ccceae62e7dd5fe5730a&oe=59B87CCA"></a>
  <a href="https://www.google.co.jp/search?q=%E3%82%A2%E3%82%A6%E3%82%BF%E3%83%BC+%E3%83%A1%E3%83%B3%E3%82%BA&rlz=1C5CHFA_enJP726JP726&oq=%E3%82%A2%E3%82%A6%E3%82%BF%E3%83%BC%E3%80%80%E3%83%A1%E3%83%B3%E3%82%BA&aqs=chrome..69i57j69i60j69i61j69i60.10317j0j9&sourceid=chrome&ie=UTF-8" target="blank"><img class="ch-img" alt="leather-jacket-img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/18557245_211960039316898_613112419249740603_n.jpg?oh=3de9b1d599be6da469a6b5862d2d8602&oe=59AD81AC"></a>
  <a href="https://www.google.co.jp/search?q=%E3%83%87%E3%83%8B%E3%83%A0+%E3%83%A1%E3%83%B3%E3%82%BA&rlz=1C5CHFA_enJP726JP726&oq=%E3%83%87%E3%83%8B%E3%83%A0%E3%80%80%E3%83%A1%E3%83%B3%E3%82%BA&aqs=chrome..69i57j69i61l3j69i65.3824j0j7&sourceid=chrome&ie=UTF-8" target="blank"><img class="ch-img" alt="jeans-img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/18556376_211960129316889_4462255196755901913_n.jpg?oh=edebe29997c66b03d7b7ca4d49785274&oe=59B0E9B6"></a>
  <a href="https://www.google.co.jp/search?q=%E3%82%B7%E3%83%A5%E3%83%BC%E3%82%BA+%E3%83%A1%E3%83%B3%E3%82%BA&rlz=1C5CHFA_enJP726JP726&oq=%E3%82%B7%E3%83%A5%E3%83%BC%E3%82%BA%E3%80%80%E3%83%A1%E3%83%B3%E3%82%BA&aqs=chrome..69i57j0l5.2150j0j7&sourceid=chrome&ie=UTF-8" target="blank"><img class="ch-img" alt="sneaker-img" src="https://scontent.xx.fbcdn.net/v/t1.0-9/18557069_211960152650220_1856731401706655323_n.jpg?oh=908dbeac9cc5033ac2b37a49b01c94f9&oe=59A104C3"></a>
</div>

<div class="sns-botton">
  <a class="twitter" target="blank" href="https://twitter.com/">Twitter</a>
  <a class="facebook" target="blank" href="https://www.facebook.com">facebook</a>
</div>
 
<!-- footerデザイン-->
<div class="container">
    <div class="col122">
      <div class="pagetop wow slideInUp" style="visibility: visible;"><a href="#top" data-slimstat="5"><i class="fa fa-chevron-up" aria-hidden="true"></i><span class="br"></span>Page Top</a></div>            <div class="copyright">
<small>©&nbsp;<a href="http://zebramaison.com/wp1" data-slimstat="5">ZEBRA MAISON</a><br class="br-sp">Powered by <a href="https://wp-emanon.jp/" title="ワードプレス テーマ Emanon" target="_blank" data-slimstat="5">WordPressテーマ Emanon</a></small>
</div>
    </div>
  </div>