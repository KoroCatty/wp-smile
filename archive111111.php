<?php get_header(); ?>
<div class="entireWrap">


    <?php the_content(); ?>

 
<div>kfakjfkafjkajdflka</div>
<!-- PageNavi (Pagination) プラグインの有効 -->
<?php if( function_exists( 'wp_pagenavi')) { wp_pagenavi();} ?>
<?php
wp_pagenavi();
?>




</div>
    <?php get_footer(); ?>