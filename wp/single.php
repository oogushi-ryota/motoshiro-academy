<?php
/*
Template Name: コラム詳細
*/
?>
  <?php get_header(); ?>

  <main class="l-main p-column">
    <section class="c-under-fv c-under-fv--column">
      <?php get_template_part( 'parts/nav' ); ?>
    </section>

    <div class="p-column__obj p-column__obj--single">
      <section class="p-column-details">
        <div class="p-column__inner">
          <h2 class="p-column__ttl"><?php the_title(); ?></h2>
          <figure class="p-column-details__thumb">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="214" height="142" alt="サムネイル" loading="lazy">
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/thumbnail.jpg" alt="代替画像">
            <?php endif; ?>
          </figure>
          <div class="p-column-details__cont">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>