<?php get_header(); ?>




<div class="entireWrap">
    <!-- -------------------- -->
    <!-- MainVis  -->
    <!-- -------------------- -->
    <section>
        <div class="mainVis">
            <div class="mainVis__img"></div>

            <div class="mainVis__textBlock">
                <p class="mainVis__textBlock--caption">
                    デザインで人を笑顔にする会社
                </p>
                <p class="mainVis__textBlock--caption">K-SMILE INC.</p>
                <h2 class="mainVis__textBlock--captionLarge">
                    DESIGN <br />
                    FOR<br />
                    SMILE.
                </h2>
            </div>
        </div>
    </section>

    <!-- -------------------- -->
    <!-- Top About  -->
    <!-- -------------------- -->
    <section class="topAbout">
        <div class="topAbout__img">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/src/img/about-img.jpg" alt="top about image"
                class="topAbout__imgContent" />
            <div class="topAbout__box">
                <h2 class="topAbout__box--title">ABOUT US</h2>
                <p class="topAbout__box--text">
                    K-SMILEは、デザインで人を笑顔にする会社。<br />
                    なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界<br />
                    を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを<br />
                    感じて生きていきたい。<br />
                    K-SMILEの社名にはそんな想いが込められています。
                </p>
                <div class="topAbout__box--btn">
                    <a href="<?php echo esc_url( home_url('/about-us') );  ?>" class="topAbout__box--btnLink">READ MORE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- -->
    <!-- Introduction   -->
    <!-- -------------------- -->
    <section class="intro">
        <div class="introWrap">
            <div class="introItem">
                <div class="introItem__title">WORKS</div>
                <div class="introItem__img">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/src/img/works-img.jpg"
                        alt="Introduction works" class="introItem__imgContent" />
                    <p class="introItem__caption">K-SMILEの制作実績を紹介します。</p>
                    <div class="introItem--btn">
                        <a href="https://k-works.netlify.app/design" class="introItem--btnLink">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="introItem">
                <div class="introItem__title">CULTURE</div>
                <div class="introItem__img">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/src/img/culture-img.jpg"
                        alt="Introduction works" class="introItem__imgContent" />
                    <p class="introItem__caption">
                        K-SMILEの社内文化について紹介します。
                    </p>
                    <div class="introItem--btn">
                        <a  class="introItem--btnLink">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- -->
    <!-- News   -->
    <!-- -------------------- -->
    <section class="news">
        <h2 class="news__title">LATEST POST</h2>



        <div class="news__box">
            <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); 
        ?>
            <div class="news__boxItem <?php post_class('news'); ?>">
                <span class="news__boxItem--category">
                    <?php the_category(); ?>
                </span>
                <time class="news__boxItem--date" datetime="<?php the_time('Y-m-d'); ?> ">
                    <?php the_time('Y年m月d日'); ?>
                </time>
                <p class="news__boxItem--text">
                    <a href=" <?php the_permalink(); ?>" class="news__boxItem--link">
                        <?php the_title(); ?>
                    </a>
                </p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
<!-- pagination Plugin -->
            <?php if( function_exists( 'wp_pagenavi')) { wp_pagenavi();} ?>

            <!-- <div class="news__boxItem">
                <time class="news__boxItem--date">2020.02.01</time>
                <p class="news__boxItem--text">
                    イベントレポート「VRクリエイター座談会 〜5Gの次に来るもの〜」
                </p>
            </div>
            <div class="news__boxItem">
                <time class="news__boxItem--date">2020.01.18</time>
                <p class="news__boxItem--text">
                    プレスリリースのお知らせ DIGGIN’ RECORDS
                </p>
            </div>
            <div class="news__boxItem">
                <time class="news__boxItem--date">2020.01.01</time>
                <p class="news__boxItem--text">
                    新年明けましておめでとうございます
                </p>
            </div>

            <div class="news--btn">
                <a href="" class="news--btnLink">READ MORE</a>
            </div> -->
        </div>


    </section>

    <!-- -------------------- -->
    <!-- Top Contact   -->
    <!-- -------------------- -->
    <section class="topContact">
        <div class="topContact__wrap">
            <div class="topContact__box">
                <div class="topContact__boxImg">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/src/img/recruit-img.jpg"
                        alt="top contact" class="topContact__boxImg--content" />
                </div>
            </div>

            <div class="topContact__boxDesc">
                <h2 class="topContact__boxDesc--title">CONTACT</h2>
                <p class="topContact__boxDesc--text">
                    制作の依頼、取材の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。<br />
                    まずはお気軽にご連絡ください。担当者から改めて返信いたします。
                </p>

                <div class="topContact--btn">
                    <a href="<?php echo esc_url( home_url('/contact-us') );  ?>"  class="topContact--btnLink">READ MORE</a>
                </div>
            </div>
        </div>
    </section>



    <?php get_footer(); ?>