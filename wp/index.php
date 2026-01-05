<?php
/*
Template Name: トップページ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <section class="p-fv">
      <picture class="p-fv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/fv/fv-sp.webp" type="image/webp" media="(max-width: 767px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/fv/fv-sp.jpg" media="(max-width: 767px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/fv/fv.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/fv/fv.jpg" width="1920" height="1040" alt="メインビジュアル">
      </picture>
    </section>

    <section class="p-about c-sec-bg c-sec-bg--about">
      <div class="p-about__txtblk c-txt-wrap c-txt-wrap--right">
        <div class="p-about__txt-wrap c-txt-wrap__inner c-txt-wrap__inner--right">
          <h2 class="p-about__ttl-wrap c-ttl-wrap">
            <span class="p-about__subttl c-subttl">総合リフォーム工事業とは?</span>
            <span class="p-about__ttl c-ttl">ABOUT</span>
          </h2>
          <p class="p-about__txt">古くなった戸建の外装・内装のリフォームを、企画・営業・施工管理・工事までを一気通貫で行う事業です。</p>
        </div>
      </div>
      <div class="c-inner">
        <div class="p-about__cont">
          <div class="p-about__img-inner p-about__img-inner--left">
            <div class="p-about__img-wrap p-about__img-wrap--left">
              <picture class="p-about__cont-img p-about__cont-img--left">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img01-sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img01-sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img01.jpg" width="750" height="480" alt="BEFORE" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="p-about__img-inner p-about__img-inner--right">
            <div class="p-about__img-wrap p-about__img-wrap--right">
              <picture class="p-about__cont-img p-about__cont-img--right">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img02-sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img02-sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img02.jpg" width="750" height="480" alt="AFTER" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
        <div class="p-about__cont-txtblk">
          <p class="p-about__cont-txt">
            “ありがとう”が、あなたの<em>勲章。</em><br>
            リフォームを通して困っている人を助け、<br>
            喜ばれる瞬間こそ、<br class="sp">私たちの<em>ヒーロータイム</em>です。
          </p>
        </div>
      </div>
    </section>

    <section class="p-environment c-sec-bg c-sec-bg--environment" id="environment">
      <div class="p-environment__txtblk c-txt-wrap c-txt-wrap--left">
        <div class="p-environment__txt-wrap c-txt-wrap__inner c-txt-wrap__inner--left">
          <h2 class="p-environment__ttl-wrap c-ttl-wrap">
            <span class="p-environment__subttl c-subttl">働く環境</span>
            <span class="p-environment__ttl c-ttl">WORK ENVIRONMENT</span>
          </h2>
        </div>
      </div>
      <div class="c-inner">
        <div class="p-environment__sec p-environment__teamwork">
          <h3 class="p-environment__sec-ttl p-environment__sec-ttl--teamwork">チームワーク</h3>
          <div class="p-environment__teamwork-wrap">
            <picture class="p-environment__teamwork-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/teamwork-img-sp.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/teamwork-img-sp.png" media="(max-width: 767px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/teamwork-img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/teamwork-img.png" width="708" height="470" alt="チームワーク" loading="lazy">
            </picture>
            <div class="p-environment__txtarea p-environment__txtarea--teamwork">
              <h4 class="p-environment__blk-ttl">
                ヒーローは、一人じゃない。<br>
                仲間と一緒に挑むから、<br class="sp">成長できる。
              </h4>
              <p class="p-environment__txt">
                クラフトマンの現場には、いつも明るい声が響いています。<br>
                困ったときは助け合い、成功したときは一緒に喜ぶ。<br>
                一人ひとりがチームの一員として力を発揮し、仲間とともに成長できる環境がここにあります。
              </p>
            </div>
          </div>
        </div>

        <div class="p-environment__sec p-environment__benefits">
          <h3 class="p-environment__sec-ttl p-environment__sec-ttl--benefits">福利厚生</h3>
          <div class="p-environment__wrap">
            <picture class="p-environment__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_img.jpg" width="572" height="322" alt="複利厚生" loading="lazy">
            </picture>
            <div class="p-environment__txtarea">
              <h4 class="p-environment__blk-ttl">
                ヒーローの努力は報われる。<br>
                だから、全力で挑戦できる。
              </h4>
              <p class="p-environment__txt">クラフトマンでは、頑張る人が正当に評価される制度を整えています。経験の有無に関わらず、一人ひとりの成長や成果をしっかりと還元。安心して長く働けるよう、福利厚生や各種手当も充実しています。</p>
            </div>
          </div>
          <ul class="p-environment__benefits-list">
            <li class="p-environment__benefits-item">
              <figure class="p-environment__item-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_list-img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_list-img01.jpg" width="376" height="212" alt="昇給・賞与制度" loading="lazy">
              </figure>
              <h5 class="p-environment__item-ttl">昇給・賞与制度</h5>
              <p class="p-environment__item-txt">
                成果に応じて年1回昇給。<br>
                頑張りを正当に評価します。
              </p>
            </li>
            <li class="p-environment__benefits-item">
              <figure class="p-environment__item-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_list-img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_list-img02.jpg" width="376" height="212" alt="資格取得支援" loading="lazy">
              </figure>
              <h5 class="p-environment__item-ttl">資格取得支援</h5>
              <p class="p-environment__item-txt">
                講習費・受験費を会社が負担。<br>
                スキルアップを応援。
              </p>
            </li>
            <li class="p-environment__benefits-item">
              <figure class="p-environment__item-img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_list-img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/benefits_list-img03.jpg" width="376" height="212" alt="社会保険完備" loading="lazy">
              </figure>
              <h5 class="p-environment__item-ttl">社会保険完備</h5>
              <p class="p-environment__item-txt">
                健康・厚生年金・雇用・労災保険を完備。<br>
                安心して働けます。
              </p>
            </li>
          </ul>
        </div>

        <div class="p-environment__sec p-environment__worklife">
          <h3 class="p-environment__sec-ttl p-environment__sec-ttl--worklife">ワークライフバランス</h3>
          <div class="p-environment__wrap">
            <picture class="p-environment__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/environment/worklife_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/worklife_img01.jpg" width="572" height="322" alt="ワークライフバランス" loading="lazy">
            </picture>
            <div class="p-environment__txtarea">
              <h4 class="p-environment__blk-ttl">
                ヒーローにも、充電の時間が必要。<br>
                しっかり休んで、次のミッションへ。
              </h4>
              <p class="p-environment__txt">クラフトマンでは、「無理のない働き方」を大切にしています。現場のスケジュール管理を徹底し、残業を減らす取り組みを実施。休日やプライベートの時間をしっかり確保できる環境づくりに力を入れています。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-job c-sec-bg c-sec-bg--job" id="recruit">
      <div class="p-job__txtblk c-txt-wrap c-txt-wrap--right">
        <div class="p-job__txt-wrap c-txt-wrap__inner c-txt-wrap__inner--right">
          <h2 class="p-job__ttl-wrap c-ttl-wrap">
            <span class="p-job__subttl c-subttl">募集要項</span>
            <span class="p-job__ttl c-ttl">JOB DESCRIPTION</span>
          </h2>
        </div>
      </div>
      <div class="c-inner">
        <div class="p-job__cont">
          <table class="p-job__table">
            <tbody class="p-job__tbody">
              <tr class="p-job__tr">
                <th class="p-job__th">募集職種</th>
                <td class="p-job__td">総合リフォームスタッフ（未経験歓迎）</td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">業務内容</th>
                <td class="p-job__td">
                  戸建の外装・内装リフォームに関わる現場作業およびサポート。<br>
                  先輩とチームで現場を回し、段階的にできる業務からお任せします。
                </td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">応募資格</th>
                <td class="p-job__td">
                  必須：普通自動車免許（AT可）<br>
                  歓迎：建築・内装関連の経験、関連資格
                </td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">勤務地</th>
                <td class="p-job__td">本社（◯◯市◯◯）／対応エリア（◯◯市近郊）</td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">勤務時間</th>
                <td class="p-job__td">8:30 ~ 17:30（実働8h／休憩1h）※現場により前後あり</td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">給料</th>
                <td class="p-job__td">
                  <ul class="p-job__td-list">
                    <li class="p-job__td-item">・月給：◯◯万〜◯◯万円（経験・能力を考慮の上決定）</li>
                    <li class="p-job__td-item">・昇給：年1回　／　賞与：年2回</li>
                    <li class="p-job__td-item">・手当：通勤手当、資格手当、役職手当 ほか</li>
                    <li class="p-job__td-item">・試用期間：3ヶ月（条件変更がある場合は明記）</li>
                  </ul>
                </td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">休日・休暇</th>
                <td class="p-job__td">週休制／長期休暇（GW・夏季・年末年始）／有給休暇</td>
              </tr>
              <tr class="p-job__tr">
                <th class="p-job__th">福利厚生</th>
                <td class="p-job__td">社会保険完備、資格取得支援、表彰制度、作業着・工具支給 ほか</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="p-exective c-sec-bg c-sec-bg--exective" id="executives">
      <div class="p-exective__txtblk c-txt-wrap c-txt-wrap--left">
        <div class="p-exective__txt-wrap c-txt-wrap__inner c-txt-wrap__inner--left">
          <h2 class="p-exective__ttl-wrap c-ttl-wrap">
            <span class="p-exective__subttl c-subttl">役員紹介</span>
            <span class="p-exective__ttl c-ttl">EXECTIVE</span>
          </h2>
        </div>
      </div>
      <div class="c-inner">
        <div class="p-exective__cont">
          <div class="p-exective__wrap">
            <div class="p-exective__item p-exective__item--president">
              <span class="p-exective__role">代表取締役</span>
              <span class="p-exective__name">明才地 颯太</span>
            </div>
            <div class="p-exective__item p-exective__item--vice">
              <span class="p-exective__role">専務取締役</span>
              <span class="p-exective__name">三木 遼太郎</span>
            </div>
          </div>
          <p class="p-exective__txt">
            クラフトマンの強みは、明るく前向きなチームワークと確かな技術力です。<br>
            お客様、協力会社、そして仲間たちとの信頼関係を大切にしながら、<br>
            <em>「またお願いしたい」</em>と言われる企業をめざしています。
          </p>
        </div>
        <div class="p-exective__message" id="message">
          <h3 class="p-exective__message-ttl">代表メッセージ</h3>
          <div class="p-exective__message-wrap">
            <picture class="p-exective__message-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/exective/message_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exective/message_img.jpg" width="572" height="500" alt="代表メッセージ" loading="lazy">
            </picture>
            <div class="p-exective__message-txtarea">
              <h4 class="p-exective__message-blk-ttl">
                働く人が誇れる会社でありたい。<br>
                クラフトマンのヒーローたちへ。
              </h4>
              <p class="p-exective__message-blk-txt">
                株式会社クラフトマンの採用ページをご覧いただき、ありがとうございます。 代表取締役の明才地颯太 と申します。<br>
                私たちは、「働く人が誇れる会社でありたい」という想いを大切にしています。<br>
                経験の有無にかかわらず、一人ひとりの努力をしっかり評価し、成果に応じた好 待遇・明確な報酬制度を整えています。<br>
                職場は明るく、チームワークを大切にする雰囲気。 無理のない働き方ができるようホワイトな職場環境づくりにも力を入れています。<br>
                「頑張りが報われる会社で働きたい」 「安心して⻑く続けられる職場を探している」 そんな方は、ぜひ一度クラフトマンの仲間になってください。<br>
                あなたの力を存分に発揮できる環境が、ここにあります。
              </p>
              <div class="p-exective__message-signature">
                <span class="p-exective__message-signature-role">代表取締役</span>
                <span class="p-exective__message-signature-name">明才地颯太</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-company c-sec-bg c-sec-bg--company" id="about">
      <div class="p-company__txtblk c-txt-wrap c-txt-wrap--right">
        <div class="p-company__txt-wrap c-txt-wrap__inner c-txt-wrap__inner--right">
          <h2 class="p-company__ttl-wrap c-ttl-wrap">
            <span class="p-company__subttl c-subttl">会社概要</span>
            <span class="p-company__ttl c-ttl">COMPANY INFO</span>
          </h2>
        </div>
      </div>
      <div class="c-inner">
        <div class="p-company__cont">
          <table class="p-company__table">
            <tbody class="p-company__tbody">
              <tr class="p-company__tr">
                <th class="p-company__th">社名</th>
                <td class="p-company__td">株式会社クラフトマン</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">代表取締役</th>
                <td class="p-company__td">明才地 颯太</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">所在地</th>
                <td class="p-company__td">
                  〒207-0014<br>
                  東京都東大和市南街2-13-2
                </td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">資材置き場</th>
                <td class="p-company__td">
                  〒207-0003<br>
                  東京都東大和市高木3-344-1
                </td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">電話番号</th>
                <td class="p-company__td">080-4939-3260</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">FAX番号</th>
                <td class="p-company__td">050-3458-0284</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">営業時間</th>
                <td class="p-company__td">8:30 ~ 17:30</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">定休日</th>
                <td class="p-company__td">日曜日</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">MAIL</th>
                <td class="p-company__td">info@craftman-1226.com</td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">URL</th>
                <td class="p-company__td">
                  <a href="https://www.craftman-1226.com/" target="_blank">https://www.craftman-1226.com/</a>
                </td>
              </tr>
              <tr class="p-company__tr">
                <th class="p-company__th">対応エリア</th>
                <td class="p-company__td">東大和市を中心に一都三県で対応</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <?php echo do_shortcode('[mwform_formkey key="16"]'); ?>
  </main>

  <?php get_footer(); ?>