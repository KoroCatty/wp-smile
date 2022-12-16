<?php get_header(); ?>

<div class="entireWrap">

    <!-- Main Visual -->
    <section>
        <div class="about__mainVis">
            <div class="about__mainVis__img"></div>

            <div class="about__mainVis__textBlock">
                <h2 class="about__mainVis__textBlock--captionLarge">404 NOT FOUND</h2>
                <!-- <p class="about__mainVis__textBlock--caption">DIGSMILEについて</p> -->
            </div>
        </div>
    </section>


    <main class="ErrorBody">



        <!-- <h2 class="pageTitle"><span>ERROR</span></h2> -->

        <div class="errorMain">
            <div class="errorContainer">
                <p class="errorContainer--text1">お探しのページが見つかりませんでした。</p>
                <p class="errorContainer--text2">申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
            </div>
        </div>

</div>
</div>
<?php get_footer(); ?>