<?php get_header(); ?>

<div class="entireWrap">

    <!-- -------------------- -->
    <!-- About MainVis  -->
    <!-- -------------------- -->
    <?php
        if( is_page('about-us')) : { ?>
    <section>
        <div class="about__mainVis">
            <div class="about__mainVis__img"></div>

            <div class="about__mainVis__textBlock">
                <h2 class="about__mainVis__textBlock--captionLarge">ABOUT US</h2>
                <p class="about__mainVis__textBlock--caption">K-SMILEについて</p>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php endif; ?>
    <!-- -------------------- -->
    <!-- contact MainVis  -->
    <!-- -------------------- -->
    <?php if( is_page('contact-us') ) : { ?>
    <section>
        <div class="contact__mainVis">
            <div class="contact__mainVis__img"></div>

            <div class="contact__mainVis__textBlock">
                <h2 class="contact__mainVis__textBlock--captionLarge">CONTACT</h2>
                <p class="contact__mainVis__textBlock--caption">お問い合わせ</p>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php endif; ?>

    <!-- Contact Form -->
<?php the_content(); ?>

    <?php get_footer(); ?>
