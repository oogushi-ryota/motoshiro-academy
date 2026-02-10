<?php
/*
Template Name: 元アカコラム
*/
?>
  <?php get_header(); ?>

  <main class="l-main p-column">
    <section class="c-under-fv c-under-fv--column">
      <?php get_template_part( 'parts/nav' ); ?>
    </section>

    <section class="p-column-intro sp">
      <div class="p-column-intro__inner">
        <p class="p-column-intro__txt">
          元アカコラムでは、<br>
          元城アカデミーからのお知らせや、<br>
          数学・英語の学習に関する話題を<br>
          発信しています。
        </p>
      </div>
    </section>

    <div class="p-column__obj">
      <section class="p-column-popular c-column">
        <div class="p-column__inner">
          <h2 class="p-column__ttl">人気コラム</h2>
          <?php
          echo do_shortcode(
            '[wpp
              limit=3
              range="monthly"
              post_type="post"
              order_by="views"
              wpp_start="<ul class=\'c-column__list\'>"
              wpp_end="</ul>"
            ]'
          );
          ?>
        </div>
      </section>

      <section class="p-column-new c-column">
        <div class="p-column__inner">
          <h2 class="p-column__ttl">最新記事一覧</h2>

          <?php if ( have_posts() ) : ?>
            <ul class="c-column__list">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'parts/thumb' ); ?>
              <?php endwhile; ?>
            </ul>
            <?php get_template_part( 'parts/pagination' ); ?>
          <?php else : ?>
            <p class="c-column__txt c-column__txt--no">コラムはまだありません。</p>
          <?php endif; ?>
          
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>