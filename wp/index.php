<?php
/*
Template Name: トップページ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <section class="p-top-fv">
      <div class="swiper-container">
        <ul class="p-top-fv__list swiper-wrapper">
          <li class="p-top-fv__item swiper-slide">
            <picture class="p-top-fv__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sp/mv-slide01.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sp/mv-slide01.jpg" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv/mv-slide01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv/mv-slide01.jpg" alt="">
            </picture>
          </li>
          <li class="p-top-fv__item swiper-slide">
            <picture class="p-top-fv__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sp/mv-slide02.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sp/mv-slide02.jpg" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv/mv-slide02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv/mv-slide02.jpg" alt="">
            </picture>
          </li>
          <li class="p-top-fv__item swiper-slide">
            <picture class="p-top-fv__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sp/mv-slide03.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sp/mv-slide03.jpg" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv/mv-slide03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv/mv-slide03.jpg" alt="">
            </picture>
          </li>
        </ul>
        <div class="p-top-fv__btn">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-top-fv__btn-link">まずは無料体験授業・ご相談はこちら</a>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/nav' ); ?>

    <section class="p-top-about">
      <div class="p-top-about__inner">
        <h2 class="p-top-about__ttl c-top-secttl">完全 1 対 1 指導の 数英専⾨塾</h2>
        <div class="p-top-about__wrap">
          <picture class="p-top-about__wrap-img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img01.jpg" width="600" height="356" alt="完全1対1指導の数英専⾨塾" loading="lazy">
          </picture>
          <div class="p-top-about__wrap-txtarea">
            <div class="p-top-about__wrap-txtbg">
              <p class="p-top-about__wrap-txt">
                「勉強できる⼈が理解の“本質”を教える。」<br>
                ただ⼿順を覚えるのではなく、<br>
                なぜそうなるのかを⼀緒に考え、<br>
                数学も英語も、⾃分で解ける⼒を育てます。<br>
                また、中学・⾼校内容を⾒据えた<br>
                先取り学習にも⼒を⼊れています。 
              </p>
            </div>
          </div>
        </div>
        <ol class="p-top-about__list">
          <li class="p-top-about__item">
            <span class="p-top-about__item-num">01</span>
            <div class="p-top-about__txtblk">
              <h3 class="p-top-about__item-ttl">医大生講師による指導。</h3>
              <p class="p-top-about__item-txt">数英を得意とする浜松医科⼤学の現役⽣が、理解の本質を押さえた効率的な学び⽅を指導します。⼀⼈ひとりの学⼒や⽬標に合わせて、数学・英語ともに基礎の定着から応⽤・⼊試対策まで柔軟に対応します。</p>
            </div>
          </li>
          <li class="p-top-about__item">
            <span class="p-top-about__item-num">02</span>
            <div class="p-top-about__txtblk">
              <h3 class="p-top-about__item-ttl">他塾との併用にも、単科特化にも対応。</h3>
              <p class="p-top-about__item-txt">
                佐鳴・秀英・⽇能研・浜学園などの⼤⼿塾に通う⽣徒はもちろん、<br class="pc">
                「数学・英語のどちらかを重点的に伸ばしたい」<br class="pc">
                「数英を 1 対 1 でじっくり⾒てほしい」という⽣徒にも選ばれています。
              </p>
            </div>
          </li>
          <li class="p-top-about__item">
            <span class="p-top-about__item-num">03</span>
            <div class="p-top-about__txtblk">
              <h3 class="p-top-about__item-ttl">数学・英語を得点源に。</h3>
              <p class="p-top-about__item-txt">医⼤⽣講師が「なぜそうなるのか」を丁寧に解説し、数学・英語ともに⾃⼒で解ける⼒を育てます。解法や構⽂を理解した上で、効率よく・スピーディーに解いていく⽅法まで指導します。 </p>
            </div>
          </li>
        </ol>
        <picture class="p-top-about__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img02.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img02.jpg" width="925" height="618" alt="" loading="lazy">
        </picture>
      </div>
    </section>

    <section class="p-top-features">
      <div class="p-top-features__inner">
        <h2 class="p-top-features__ttl c-top-secttl">個別指導の違い</h2>
        <div class="p-top-features__wrap">
          <table class="p-top-features__table">
            <thead class="p-top-features__thead">
              <tr class="p-top-features__thead-tr">
                <th scope="col" class="p-top-features__thead-th"></th>
                <th scope="col" class="p-top-features__thead-th p-top-features__thead-th--academy">元城アカデミー</th>
                <th scope="col" class="p-top-features__thead-th">一般的な塾</th>
              </tr>
            </thead>
            <tbody class="p-top-features__tbody">
              <tr class="p-top-features__tbody-tr">
                <th scope="row" class="p-top-features__tbody-th">
                  講師一人に対して<br>
                  生徒の人数
                </th>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img01.svg" width="243" height="160" alt="完全１：１個別指導" loading="lazy">
                    <figcaption>完全１：１個別指導</figcaption>
                  </figure>
                </td>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img02.svg" width="243" height="160" alt="実質１：２指導" loading="lazy">
                    <figcaption>実質１：２指導</figcaption>
                  </figure>
                </td>
              </tr>
              <tr class="p-top-features__tbody-tr">
                <th scope="row" class="p-top-features__tbody-th">授業時間</th>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img03.svg" width="243" height="160" alt="授業時間すべて対応" loading="lazy">
                    <figcaption>授業時間すべて対応</figcaption>
                  </figure>
                </td>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img04.svg" width="243" height="160" alt="実質、授業時間の半分しか指導がない" loading="lazy">
                    <figcaption>実質、授業時間の半分しか<br class="sp">指導がない</figcaption>
                  </figure>
                </td>
              </tr>
              <tr class="p-top-features__tbody-tr">
                <th scope="row" class="p-top-features__tbody-th">待ち時間</th>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img05.svg" width="243" height="160" alt="なし" loading="lazy">
                    <figcaption>なし</figcaption>
                  </figure>
                </td>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img06.svg" width="243" height="160" alt="もう一人の指導中は待ち時間となる" loading="lazy">
                    <figcaption>もう一人の指導中は<br class="sp">待ち時間となる</figcaption>
                  </figure>
                </td>
              </tr>
              <tr class="p-top-features__tbody-tr">
                <th scope="row" class="p-top-features__tbody-th">講師の大学</th>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img07.svg" width="243" height="160" alt="浜松医科大学 現役生" loading="lazy">
                    <figcaption>浜松医科大学 現役生</figcaption>
                  </figure>
                </td>
                <td class="p-top-features__tbody-td">
                  <figure class="p-top-features__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/features/table_img08.svg" width="243" height="160" alt="大学名 非公開・不明" loading="lazy">
                    <figcaption>大学名 非公開・不明</figcaption>
                  </figure>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="p-top-features__txt">
          講師 1 名が60 分すべてを<br>
          ⼀⼈の⽣徒に対応します。
        </p>
      </div>
    </section>

    <section class="p-top-course">
      <div class="p-top-course__inner">
        <h2 class="p-top-course__ttl c-top-secttl">コース案内</h2>
        <ul class="p-top-course__list">
          <li class="p-top-course__item">
            <picture class="p-top-course__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/course/course_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/course/course_img01.jpg" width="381" height="254" alt="小学生コース" loading="lazy">
            </picture>
            <div class="p-top-course__txtbox">
              <h3 class="p-top-course__item-ttl">小学生コース</h3>
              <p class="p-top-course__txt">中学数学・英語を⾒据えた先取り学習を⾏い、数学的思考⼒とあわせて、英語学習に必要な基礎的な理解⼒も育てます。</p>
            </div>
          </li>
          <li class="p-top-course__item">
            <picture class="p-top-course__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/course/course_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/course/course_img02.jpg" width="381" height="254" alt="中学生コース" loading="lazy">
            </picture>
            <div class="p-top-course__txtbox">
              <h3 class="p-top-course__item-ttl">中学生コース</h3>
              <p class="p-top-course__txt">内申・定期テスト対策から⾼校⼊試まで対応。数学・英語を中⼼に、学校や他塾で学んだ内容を整理・定着させます。</p>
            </div>
          </li>
          <li class="p-top-course__item">
            <picture class="p-top-course__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/course/course_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/course/course_img03.jpg" width="381" height="254" alt="高校生コース" loading="lazy">
            </picture>
            <div class="p-top-course__txtbox">
              <h3 class="p-top-course__item-ttl">高校生コース</h3>
              <p class="p-top-course__txt">⼤学⼊試に向けた数学・英語の総合⼒を育成。共通テストから⼆次試験まで、思考の過程を重視した指導で応⽤⼒・記述⼒を鍛えます。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-top-column c-column">
      <div class="p-top-column__inner">
        <h2 class="p-top-column__ttl c-top-secttl">数学・英語コラム</h2>

        <?php
        $args = array(
          'post_type'      => 'post', // コラム（投稿）
          'posts_per_page' => 3,      // ★ 最大3件
          'orderby'        => 'date',
          'order'          => 'DESC',
        );

        $top_column_query = new WP_Query( $args );
        ?>
        <?php if ( $top_column_query->have_posts() ) : ?>
          <ul class="c-column__list">
            <?php while ( $top_column_query->have_posts() ) : $top_column_query->the_post(); ?>
              <?php get_template_part( 'parts/thumb' ); ?>
            <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p class="c-column__txt c-column__txt--no">コラムはまだありません。</p>
        <?php endif; ?>

      </div>
    </section>
  </main>

  <?php get_footer(); ?>