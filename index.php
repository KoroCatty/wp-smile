<?php get_header(); ?>
<div class="entireWrap">

    <!-- archive main visual -->
    <?php
        if( is_archive() ) : { ?>
    <section>
        <div class="single__mainVis">
            <div class="single__mainVis__img"></div>

            <div class="single__mainVis__textBlock">
                <h2 class="single__mainVis__textBlock--captionLarge">BLOG </h2>
                <p class="single__mainVis__textBlock--caption">Enhance Your Business</p>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php endif; ?>


    <main class="archiveBody">

        <?php if ( is_month() ): ?>
        <h2 class="main_title"><?php the_time('Y年m月'); ?></h2>
        <?php else: ?>
        <!-- titleの表示 -->
        <h2 class="archive__title"><?php wp_title(''); ?></h2>
        <?php endif; ?>



        <!-- 投稿記事をループで表示 -->
        <div class="PostWrap">
            <div class="PostWrap__flex">
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('PostBox'); ?>>
                    <div class="news_pic">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png"
                                alt="">
                            <?php endif; ?>
                        </a>
                    </div>

                    <div class="news_meta">
                        <?php the_category(); ?>
                        <time class="news_time"
                            datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>

                        <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="news_desc">
                            <?php // the_excerpt(); ?>
                            <!-- <p><a href="<?php // the_permalink(); ?>">[続きを読む]</a></p> -->
                        </div>
                    </div>
                </article>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- side  bar -->
        <!-- <div class="col-12 col-md-3">
            <?php // get_sidebar('categories'); ?>
            <?php // get_sidebar('archives'); ?>
        </div> -->

    </main>
</div>
<?php get_footer(); ?>