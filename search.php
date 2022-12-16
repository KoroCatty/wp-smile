<?php get_header(); ?>

<div class="entireWrap">

    <!-- Main Visual -->
    <section>
        <div class="about__mainVis">
            <div class="about__mainVis__img"></div>

            <div class="about__mainVis__textBlock">
                <h2 class="about__mainVis__textBlock--captionLarge">Search</h2>
                <!-- <p class="about__mainVis__textBlock--caption">DIGSMILEについて</p> -->
            </div>
        </div>
    </section>




    <main class="searchBody">

        <h2 class="SearchTitle">サイト内検索<span>SEARCH</span></h2>
        <h2 class="searchedWord">
            「<?php the_search_query(); ?>」の検索結果
            <!-- <span class="searchedWord--small">の検索結果</span> -->
        </h2>

        <div class="PostWrap">
            <div class="PostWrap__flex">

                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <!-- 投稿記事をループで表示 -->
                <article id="post-<?php the_ID(); ?>" <?php post_class('PostBox'); ?>>
                    <div class="news_pic">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/kv-img.jpg ?>"
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
                            <?php the_excerpt(); ?>
                            <!-- <p><a href="<?php // the_permalink(); ?>">[続きを読む]</a></p> -->
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
                
                <?php else: ?>
                <p class="resultMes">検索結果はありませんでした</p>
                <?php endif; ?>

            </div>
        </div>
    </main>

</div>
<?php get_footer(); ?>