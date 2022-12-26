<?php get_header(); ?>

<div class="entireWrap">

    <!-- About MainVis  -->
    <?php
    if (is_single()) : { ?>
            <section>
                <div class="single__mainVis">
                    <div class="single__mainVis__img"></div>

                    <div class="single__mainVis__textBlock">
                        <h2 class="single__mainVis__textBlock--captionLarge">Post Page</h2>
                        <p class="single__mainVis__textBlock--caption">BLOG</p>
                    </div>
                </div>
            </section>
        <?php } ?>
    <?php endif; ?>

    <main class="postBody">
        <div class="article_meta">
            <?php the_category(); ?>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
        </div>

        <!-- Title, category, date -->
        <h1 class="article_title"><?php the_title(); ?></h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) :
                the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

                    <header class="article_header">
                        <!-- アイキャッチ画像 -->
                        <?php if (has_post_thumbnail()) : ?>
                            <?php // the_post_thumbnail(array(600, 600), array('class' => 'eyeCatch')); 
                            ?>
                        <?php endif; ?>
                    </header>

                    <!-- コンテンツ(Managed by WP admin) -->
                    <div class="article__body">
                        <div class="article__bodyContent">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- from custom filed set by admin -->
                    <div class="customFiled">
                        <?php
                        $gazou = get_field('gazou');
                        // Large Size
                        // $gazou_url = $gazou['sizes']['large'];
                        $gazou_url = $gazou['sizes']['medium'];
                        ?>
                        <img src="<?php echo $gazou_url; ?>" alt="" class="customFiled__img">
                    </div>


                    <!-- ページネーション -->
                    <div class="postLinks">
                        <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?>
                        </div>
                        <div></div>
                        <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?>
                        </div>
                    </div>

                    <?php
                    wp_pagenavi();
                    ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>







</div>
<!-- .entireWrap -->
<?php get_footer(); ?>