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
                <p class="about__mainVis__textBlock--caption">DIGSMILEについて</p>
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


    <?php // the_content(); ?>

     <main class="aboutWrap">
        <!-- Message    -->
        <section class="about__message">
            <div class="about__messageBox">
                <h2 class="about__messageTitle">VISION</h2>
                <h3 class="about__messageTitle--small">デザインで人を笑顔にする会社</h3>

                <p class="about__messageText">私達のデザインで人が笑顔になる。</p>
                <p class="about__messageText">そんなデザインを目指しています。</p>
                <p class="about__messageText">
                    私達が考える人を笑顔にできるデザインとは、<br />
                    デザインが課題を適切に解決ができているかどうか。
                </p>
                <p class="about__messageText">
                    ビジュアルだけではなく、<br />
                    本当に求められているものは何かを考え抜いて、<br />
                    デザインしていきたい。
                </p>
                <p class="about__messageText">
                    誰かの幸せを創ることも、<br />
                    世界の常識を変えていくことだってできる。
                </p>
                <p class="about__messageText">私達はデザインの力を信じています。</p>
            </div>
        </section>

        <!-- -------------------- -->
        <!-- ceoMessage   -->
        <!-- -------------------- -->

        <section class="ceoMes">
            <div class="ceoMes__wrap">

                <div class="ceoMes__imgBox">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/about__ceo.jpg" alt="CEO Message" class="ceoMes__imgBox--img" />
                </div>

                <div class="ceoMes__box">
                    <h2 class="ceoMes__box--title">CEO MESSAGE</h2>
                    <p class="ceoMes__box--text">良いデザインは人を幸せにする。</p>
                    <p class="ceoMes__box--text">私達はそう信じています。</p>
                    <p class="ceoMes__box--text">
                        デザインを通して、ビジネスの課題とユーザーの課題を解決することで、世の中を幸せにしていきたい。
                    </p>
                    <p class="ceoMes__box--text">
                        現在はあらゆるプロダクトがデジタル化されており、デザイナーに対する需要はますます高まっています。それとともに、期待される役割も幅広くなりつつあります。
                        クリエイティブで社会の可能性を切り開いていく。
                    </p>
                    <p class="ceoMes__box--text">
                        変化の激しい現代、私達はデザインの力で社会を良い方向に変革していく企業を目指していきます。
                    </p>
                </div>
            </div>
        </section>

        <!-- -------------------- -->
        <!-- Information   -->
        <!-- -------------------- -->
        <section class="aboutInfo">
            <h2 class="aboutInfo__title">COMPANY</h2>

            <div class="aboutInfo__box">
                <ul class="aboutInfo__boxItem">
                    <li class="aboutInfo__boxItem--subject">社名</li>
                    <li class="aboutInfo__boxItem--name">株式会社DIGSMILE</li>
                </ul>
                <ul class="aboutInfo__boxItem">
                    <li class="aboutInfo__boxItem--subject">代表取締役</li>
                    <li class="aboutInfo__boxItem--name">テイラー・スウィフト</li>
                </ul>
                <ul class="aboutInfo__boxItem">
                    <li class="aboutInfo__boxItem--subject">設立</li>
                    <li class="aboutInfo__boxItem--name">2020年1月1日</li>
                </ul>
                <ul class="aboutInfo__boxItem">
                    <li class="aboutInfo__boxItem--subject">資本金</li>
                    <li class="aboutInfo__boxItem--name">1億円</li>
                </ul>
                <ul class="aboutInfo__boxItem">
                    <li class="aboutInfo__boxItem--subject">所在地</li>
                    <li class="aboutInfo__boxItem--name">東京都新宿区☓☓0-0-0</li>
                </ul>
                <ul class="aboutInfo__boxItem">
                    <li class="aboutInfo__boxItem--subject">電話番号</li>
                    <li class="aboutInfo__boxItem--name">03-0000-00000</li>
                </ul>
            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25919.998623851272!2d139.68859764223282!3d35.70162184559679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d2059b7fd4b%3A0xec61c68fe232efd2!2z5pel5pys44CB5p2x5Lqs6YO95paw5a6_5Yy6!5e0!3m2!1sja!2sau!4v1669030247407!5m2!1sja!2sau"
                    width="" height="" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </main>




    <?php get_footer(); ?>