<?php
/*
Template Name: 完了画面
*/
?>
  <?php get_header(); ?>

  <main class="l-main p-contact">
    <div class="p-contact__obj">
      <section class="p-contact-form">
        <div class="p-contact-form__inner">
          <h2 class="p-contact__ttl">お問い合わせフォーム</h2>
          <div id="mw_wp_form_mw-wp-form-24" class="mw_wp_form mw_wp_form_complete">
            <p style="color: #222;font-family: 'Noto Sans JP', sans-serif;text-align: center;font-weight: 700;font-size: 48px;line-height: 100%;letter-spacing: .05em">
              送信完了
            </p>
            <p style="font-family: 'Noto Sans JP', sans-serif;text-align: center;margin: 40px 0 0;font-weight: 500;font-size: 18px;line-height: 180%;letter-spacing: .05em">
              お問合せありがとうございます。<br>
              内容を確認の上、担当者よりご連絡いたします。
            </p>
            <div class="p-contact-form__btn">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-contact-form__btn-thanks">TOPに戻る</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>