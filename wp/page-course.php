<?php
/*
Template Name: コース・料金
*/
?>
  <?php get_header(); ?>

  <main class="l-main p-course">
    <section class="c-under-fv c-under-fv--course">
      <?php get_template_part( 'parts/nav' ); ?>
    </section>

    <section class="p-course-intro">
      <div class="p-course-intro__inner">
        <div class="p-course-intro__wrap">
          <div class="p-course-intro__cont">
            <figure class="p-course-intro__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/intro/intro_img01.svg" width="406" height="406" alt="全学年1時間5,500円 税込" loading="lazy">
            </figure>
          </div>
          <div class="p-course-intro__cont">
            <figure class="p-course-intro__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/intro/intro_img02.svg" width="406" height="406" alt="諸費用(年間)2,750円 税込" loading="lazy">
            </figure>
          </div>
          <div class="p-course-intro__cont">
            <figure class="p-course-intro__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/intro/intro_img03.svg" width="406" height="406" alt="入塾金 22,000円 税込" loading="lazy">
            </figure>
          </div>
        </div>
        <div class="p-course-intro__note">
          <p class="p-course-intro__note-txt">1.5時間や2時間の授業も可能です。</p>
          <p class="p-course-intro__note-txt">
            完全 1 対 1 の個別指導。講師1名が<br class="pc">
            60分すべてを一人の生徒に対応します。
          </p>
        </div>
      </div>
    </section>

    <section class="p-course-menu">
      <div class="p-course-menu__inner">
        <div class="p-course-menu__item">
          <picture class="p-course-menu__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/course/menu/menu_img01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/menu/menu_img01.jpg" width="650" height="433" alt="小学生コース" loading="lazy">
          </picture>
          <div class="p-course-menu__txtblk">
            <h3 class="p-course-menu__ttl">小学生<br>コース</h3>
            <p class="p-course-menu__txt">
              中学以降の学力の土台となる計算力・思考力・文章理解を養います。<br>
              中学数学・英語へのスムーズな接続を目指し、先取り学習や理解の定着にも対応します。
            </p>
            <div class="p-course-menu__cont">
              <h4 class="p-course-menu__cont-ttl">指導内容</h4>
              <ul class="p-course-menu__cont-list">
                <li class="p-course-menu__cont-item">計算力・思考力の強化</li>
                <li class="p-course-menu__cont-item">文章問題・図形問題への対応</li>
                <li class="p-course-menu__cont-item">中学内容を見据えた先取り学習</li>
                <li class="p-course-menu__cont-item">学習習慣の定着サポート</li>
              </ul>
            </div>
            <div class="p-course-menu__cont">
              <h4 class="p-course-menu__cont-ttl">目標校</h4>
              <p class="p-course-menu__cont-txt">
                静大附属中／浜松西高中等部／浜松日体中／浜松学芸中 などの地域人気校、<br>
                および 全国の中高一貫校（愛知・関西・関東エリアを含む難関校） を視野に指導。
              </p>
            </div>
          </div>
        </div>
        <div class="p-course-menu__item">
          <picture class="p-course-menu__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/course/menu/menu_img02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/menu/menu_img02.jpg" width="650" height="433" alt="中学生コース" loading="lazy">
          </picture>
          <div class="p-course-menu__txtblk">
            <h3 class="p-course-menu__ttl">中学生<br>コース</h3>
            <p class="p-course-menu__txt">
              内申・定期テスト対策から高校入試・内部進学まで、<br>
              数学・英語を中心に幅広く対応します。<br>
              学校や他塾で学んだ内容を整理し、「分かったつもり」を「解ける」に変える指導を行います。
            </p>
            <div class="p-course-menu__cont">
              <h4 class="p-course-menu__cont-ttl">指導内容</h4>
              <ul class="p-course-menu__cont-list">
                <li class="p-course-menu__cont-item">定期テスト対策（学校進度に対応）</li>
                <li class="p-course-menu__cont-item">数学・英語の弱点補強</li>
                <li class="p-course-menu__cont-item">高校入試を見据えた基礎〜応用</li>
                <li class="p-course-menu__cont-item">内部進学・成績向上サポート</li>
              </ul>
            </div>
            <div class="p-course-menu__cont">
              <h4 class="p-course-menu__cont-ttl">目標校</h4>
              <p class="p-course-menu__cont-txt">
                浜松北／浜松西／浜松市立／浜松南／浜松日体／浜松学芸 などの地域上位校、<br>
                および 全国の難関私立・附属高校（愛知・関西・関東エリアを含む） を想定対象。
              </p>
            </div>
          </div>
        </div>
        <div class="p-course-menu__item">
          <picture class="p-course-menu__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/course/menu/menu_img03.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/menu/menu_img03.jpg" width="650" height="433" alt="高校生コース" loading="lazy">
          </picture>
          <div class="p-course-menu__txtblk">
            <h3 class="p-course-menu__ttl">高校生<br>コース</h3>
            <p class="p-course-menu__txt">
              大学入試に向けて、数学・英語の総合力を育成します。<br>
              共通テストから二次試験まで、思考の過程を重視した指導で自力で解き切る力を養います。
            </p>
            <div class="p-course-menu__cont">
              <h4 class="p-course-menu__cont-ttl">指導内容</h4>
              <ul class="p-course-menu__cont-list">
                <li class="p-course-menu__cont-item">共通テスト・二次試験対策</li>
                <li class="p-course-menu__cont-item">数学・英語の本質理解と演習</li>
                <li class="p-course-menu__cont-item">弱点分析と得点力の安定化</li>
                <li class="p-course-menu__cont-item">学習計画・進捗管理サポート</li>
              </ul>
            </div>
            <div class="p-course-menu__cont">
              <h4 class="p-course-menu__cont-ttl">目標校</h4>
              <p class="p-course-menu__cont-txt">
                東京大学／京都大学／一橋大学／東京科学大学／大阪大学／東北大学／名古屋大学／<br>
                北海道大学／九州大学／神戸大学／筑波大学／東京外国語大学／浜松医科大学／<br>
                静岡大学／静岡県立大学／その他の国公立大学（医学部含む）／早稲田大学／<br>
                慶應義塾大学／上智大学／GMARCH／関関同立／その他の私立大学（医学部含む）
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>