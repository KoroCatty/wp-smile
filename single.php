<?php get_header(); ?>

<div class="entireWrap">

    <!-- -------------------- -->
    <!-- About MainVis  -->
    <!-- -------------------- -->
    <?php
        if( is_single() ) : { ?>
    <!-- <section>
        <div class="about__mainVis">
            <div class="about__mainVis__img"></div>

            <div class="about__mainVis__textBlock">
                <h2 class="about__mainVis__textBlock--captionLarge">Post Page</h2>
                <p class="about__mainVis__textBlock--caption">BLOG</p>
            </div>
        </div>
    </section> -->
    <?php } ?>
    <?php endif; ?>


    <h2 class="article_title"><?php the_title(); ?></h2>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
        <header class="article_header">
        <!-- アイキャッチ画像 -->
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail( array(600, 600)); ?>
            <?php endif; ?>

            <!-- <h2 class="article_title"><?php //the_title(); ?></h2> -->
            <div class="article_meta">
                <?php the_category(); ?>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
            </div>
        </header>

        <div class="article_body">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>

        <!-- ページネーション -->
        <div class="postLinks">
            <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?>
            </div>
            <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>








</div>
<?php get_footer(); ?>