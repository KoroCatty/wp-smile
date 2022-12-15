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


    <?php the_content(); ?>


    <main class="contactWrap">
      <!-- -------------------- -->
      <!-- Contact Forms  -->
      <!-- -------------------- -->
      <section class="contactForm">
        <div class="contactForm__wrap">
          <p class="contactForm__text">
            ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。
          </p>

          <p class="contactForm__radioTitle">お問い合わせ種別</p>

          <!-- Radio buttons -->
          <div class="contactForm__radioWrap">
            <input type="radio" id="1" name="contactRadio" value="1" checked />
            <label for="1">制作依頼</label><br />

            <input type="radio" id="2" name="contactRadio" value="2" />
            <label for="2">採用</label>
            <br />

            <input type="radio" id="3" name="contactRadio" value="3" />
            <label for="3">IR</label>
            <br />

            <input type="radio" id="4" name="contactRadio" value="4" />
            <label for="4">その他</label>
            <br />
          </div>

          <!-- Forms -->
          <form class="formGroup">
            <label class="label1" for="fname">会社名・団体名:</label><br />
            <input type="text" id="fname" name="fname" /><br />

            <label class="label2" for="lname">お名前:</label><br />
            <input type="text" id="lname" name="lname" /><br />

            <label class="label3" for="lname">メールアドレス:</label><br />
            <input type="text" id="lname" name="lname" /><br />

            <label class="label4" for="lname">電話番号:</label><br />
            <input type="text" id="lname" name="lname" /><br />

            <label class="label5" for="lname">お問い合わせ内容:</label><br />
            <textarea type="text" id="lname" name="lname"></textarea><br />

            <label class="label6" class="privacy__label" for="lname">PRIVACY POLICY:</label><br />
            <textarea class="privacy" type="text" id="lname" name="lname">
個人情報保護方針
株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、以下の基準に従って、適切な管理、保護に努めます。

1.個人情報の収集、利用
当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、収集した目的の範囲内で、個人情報を利用いたします。


2.個人情報の第三者への開示と提供
収集したお客様の個人情報は、法的な要請等によらない限り、お客様の承諾を得ない第三者に対して提供・開示はいたしません。
業務の都合上、業務委託先に個人情報を提供する場合は、機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、業務委託先が適切に個人情報を取り扱うように管理いたします。

3.個人情報の保護
当社では、個人情報の紛失、破壊、改ざん、不正アクセス、および漏えい等を防止するため、適切な対策を行います。

4.法令および関連規範の遵守
当社は、個人情報の取り扱いに関して、個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。

5.個人情報の開示・訂正・削除
当社では、個人情報の開示・訂正・削除等の依頼があった場合、情報提供者本人であることを確認の上、すみやかに対応いたします。

法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。

お問い合わせ窓口
当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。
株式会社ファイアープレイス
044-589-4333
            </textarea
            ><br />

            <div class="formGroup__agreeCheck">
              <input
                type="checkbox"
                id="vehicle1"
                name="vehicle1"
                value="Bike"
              />
              <label for="vehicle1">
                個人情報の取り扱いについて同意のうえ送信します。 </label
              ><br />
            </div>

            <div class="formGroup__btn">
              <a href="" class="formGroup__btn--link">送信</a>
            </div>
          </form>
        </div>
      </section>
    </main>




    <?php get_footer(); ?>