<?php
/*
Template Name: 塾・講師紹介
*/
?>
  <?php get_header(); ?>

  <main class="l-main p-about">
    <section class="c-under-fv c-under-fv--about">
      <?php get_template_part( 'parts/nav' ); ?>
    </section>

    <section class="p-about-philosophy">
      <div class="p-about__inner">
        <h2 class="p-about__sec-ttl">理念</h2>
        <p class="p-about__sec-txt">
          「勉強ができる⼈が、<br class="sp">理解の“本質”を教える。」<br>
          ただ⼿順を覚えるのではなく、なぜそうなるのかを⼀緒に考え、<br>
          数学も英語も、<br class="sp">⾃分で解ける⼒を育てます。<br>
          また、中学・⾼校内容を⾒据えた先取り学習にも⼒を⼊れています。
        </p>
        <div class="p-about-philosophy__wrap">
          <div class="p-about-philosophy__txtblk">
            <h3 class="p-about-philosophy__blk-ttl">講師採用方針</h3>
            <p class="p-about-philosophy__blk-txt">
              元城アカデミーでは、浜松医科⼤学の<br class="pc">
              現役⽣のみを講師として採⽤し、<br class="pc">
              数学・英語を完全 1 対 1 で専⾨指導して<br class="pc">
              います。採⽤にあたっては、<br class="pc">
              医科⼤学⽣であることを前提とした上で、<br class="pc">
              ⽣徒の思考に寄り添えるか「なぜそうなるのか」<br class="pc">
              を分かりやすく伝えられるか、⼀⼈の⽣徒に<br class="pc">
              最後まで向き合う責任感があるかを重視し、<br class="pc">
              ⾯接・選考を⾏っています。<br class="pc">
              指導⼒と⼈柄の両⾯を満たした講師のみが、<br class="pc">
              授業を担当します。
            </p>
          </div>
          <picture class="p-about-philosophy__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/philosophy/philosophy_img01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/philosophy/philosophy_img01.png" width="720" height="720" alt="講師採用方針" loading="lazy">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-about-teacher">
      <div class="p-about__inner">
        <h2 class="p-about__sec-ttl">講師紹介</h2>
        <p class="p-about__sec-txt">
          元城アカデミーでは、<br>
          浜松医科大学の学生で数学・英語を得意とする講師陣が指導しています。<br>
          各講師がそれぞれの専門や経験を活かし、生徒一人ひとりの理解に寄り添います。<br>
          学力だけでなく、誠実さ・人柄・教える力を重視して採用しています。
        </p>
        <ul class="p-about-teacher__list">
          <li class="p-about-teacher__item">
            <figure class="p-about-teacher__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/teacher/teacher_img01.svg" width="235" height="235" alt="講師写真" loading="lazy">
            </figure>
            <div class="p-about-teacher__item-head">
              <span class="p-about-teacher__name">S.N</span>
              <span class="p-about-teacher__faculty">医学科 1 年</span>
            </div>
            <p class="p-about-teacher__txt">
              一人ひとりの理解度に合わせて、<br>
              丁寧にサポートいたします！
            </p>
          </li>
          <li class="p-about-teacher__item">
            <figure class="p-about-teacher__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/teacher/teacher_img02.svg" width="235" height="235" alt="講師写真" loading="lazy">
            </figure>
            <div class="p-about-teacher__item-head">
              <span class="p-about-teacher__name">N.Y</span>
              <span class="p-about-teacher__faculty">医学科 2 年</span>
            </div>
            <p class="p-about-teacher__txt">
              一緒に勉強を楽しんで<br>
              レベルアップして<br>
              いきましょう！
            </p>
          </li>
          <li class="p-about-teacher__item">
            <figure class="p-about-teacher__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/teacher/teacher_img03.svg" width="235" height="235" alt="講師写真" loading="lazy">
            </figure>
            <div class="p-about-teacher__item-head">
              <span class="p-about-teacher__name">K.M</span>
              <span class="p-about-teacher__faculty">医学科 2 年</span>
            </div>
            <p class="p-about-teacher__txt">
              一人ひとりに合った指導を<br>
              大切にし、着実に学びを<br>
              進めたい方をサポートします。
            </p>
          </li>
          <li class="p-about-teacher__item">
            <figure class="p-about-teacher__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/teacher/teacher_img04.svg" width="235" height="235" alt="講師写真" loading="lazy">
            </figure>
            <div class="p-about-teacher__item-head">
              <span class="p-about-teacher__name">K.Y</span>
              <span class="p-about-teacher__faculty">医学科 2 年</span>
            </div>
            <p class="p-about-teacher__txt">
              一人ひとりに寄り添いながら、<br>
              勉強を楽しく、前向きに進め<br>
              られるようサポートします！
            </p>
          </li>
          <li class="p-about-teacher__item">
            <figure class="p-about-teacher__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/teacher/teacher_img05.svg" width="235" height="235" alt="講師写真" loading="lazy">
            </figure>
            <div class="p-about-teacher__item-head">
              <span class="p-about-teacher__name">Y.S</span>
              <span class="p-about-teacher__faculty">医学科 2年</span>
            </div>
            <p class="p-about-teacher__txt">
              合格までの道のりを、<br>
              全力でサポートします！
            </p>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-about-principal">
      <div class="p-about-principal__inner">
        <h2 class="p-about__sec-ttl">塾長紹介</h2>
        <div class="p-about-principal__cont">
          <div class="p-about-principal__cont-wrap">
            <figure class="p-about-principal__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/principal/principal_img.svg" alt="佐和賢太郎" width="235" height="235">
            </figure>
            <div class="p-about-principal__txtblk">
              <h3 class="p-about-principal__name">佐和 賢太郎</h3>
              <p class="p-about-principal__txt">
                早稲田大学教育学部英語英文学科卒<br>
                早稲田大学政治学研究科博士後期課程修了<br>
                <span class="p-about-principal__s-txt">(単位取得満期退学)</span>
              </p>
            </div>
          </div>
          <div class="p-about-principal__profile">
            <h3 class="p-about-principal__profile-ttl">経歴</h3>
            <p class="p-about-principal__profile-txt">
              静岡県浜松市出身。<br>
              河合塾KALS新宿校元講師、<br class="sp">四谷学院元講師。<br>
              産業能率短期大学元非常勤講師。<br>
              スプリング・オンライン家庭教師<br class="sp">共同創設者・講師。<br>
              受験英語専門塾 松城ゼミナール <br class="sp">創設者・塾長兼講師。
            </p>
          </div>
          <div class="p-about-principal__profile">
            <h3 class="p-about-principal__profile-ttl">学歴</h3>
            <p class="p-about-principal__profile-txt">
              早稲田大学教育学部英語英文学科卒。<br>
              早稲田大学政治学研究科博士後期課程修了(単位取得満期退学) <br>
              大学院時代の専門：ドイツ現代史、国際政治史、<br>
              国際関係論、国際政治学<br>
              海外渡航歴　米国やドイツへの留学経験あり。<br><br>
              TOEIC 980点<br>
              駿台全国模試10位(英語)<br>
              駿台成績優秀者の受賞歴あり。
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="p-about-school">
      <div class="p-about__inner">
        <h2 class="p-about__sec-ttl">教室案内</h2>
        <p class="p-about__sec-txt">
          教室は、浜松市中央区・布橋に位置し、姫街道沿いの通塾しやすい⽴地です。<br>
          個別指導に集中できるよう、机の配置や動線にも配慮した設計とし、<br>
          ⽣徒が落ち着いて考えられる空間を整えています。<br>
          講師と 1 対 1 でじっくり向き合える、集中しやすい学習環境を⼤切にしています。
        </p>
        <div class="p-about-school__wrap">
          <picture class="p-about-school__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img01.jpg" width="428" height="428" alt="教室案内" loading="lazy">
          </picture>
          <picture class="p-about-school__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img02.jpg" width="428" height="428" alt="教室案内" loading="lazy">
          </picture>
          <picture class="p-about-school__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img03.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img03.jpg" width="428" height="428" alt="教室案内" loading="lazy">
          </picture>
          <picture class="p-about-school__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img04.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/school/school_img04.jpg" width="428" height="428" alt="教室案内" loading="lazy">
          </picture>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>