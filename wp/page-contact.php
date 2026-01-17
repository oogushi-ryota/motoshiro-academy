<?php
/*
Template Name: お問合せ・Q&A
*/
?>
  <?php get_header(); ?>

  <main class="l-main p-contact">
    <section class="c-under-fv c-under-fv--contact">
      <?php get_template_part( 'parts/nav' ); ?>
    </section>

    <div class="p-contact__obj">
      <section class="p-contact-form">
        <div class="p-contact-form__inner">
          <h2 class="p-contact__ttl">お問い合わせフォーム</h2>
          <?php echo do_shortcode('[mwform_formkey key="24"]'); ?>
        </div>
      </section>

      <section class="p-contact-faq">
        <div class="p-contact-faq__inner">
          <h2 class="p-contact__ttl">よくある質問Q＆A</h2>
          <div class="p-contact-faq__cont">
            <details class="p-contact-faq__details">
              <summary class="p-contact-faq__summary">入塾・退塾について</summary>
              <ul class="p-contact-faq__list">
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">入塾テストはありますか？</h3>
                  <p class="p-contact-faq__answer">
                    入塾テストはございません。<br>
                    現在の学力に関わらず、それぞれの理解度や目標に合わせて指導を行いますので、どの学力レベルの生徒さまもご入塾いただけます。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">授業についていけるか不安です。</h3>
                  <p class="p-contact-faq__answer">
                    元城Academyでは、完全1対1の個別指導を行っています。<br>
                    講師が生徒一人ひとりの理解度を確認しながら授業を進めますので、分からないまま授業が進むことはありません。<br>
                    ご不安な点があれば、体験授業や面談の際にお気軽にご相談ください。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">途中からの入塾は可能ですか？</h3>
                  <p class="p-contact-faq__answer">
                    はい、可能です。<br>
                    学年や時期を問わず、現在の状況に合わせて学習計画を立てて指導いたします。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">兄弟・姉妹で入塾する場合、特典はありますか？</h3>
                  <p class="p-contact-faq__answer">
                    ご兄弟・ご姉妹でご入塾いただく場合、2人目以降の方の入会金は無料となります。<br>
                    詳細はお問い合わせください。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">友人紹介の特典はありますか？</h3>
                  <p class="p-contact-faq__answer">ご紹介者さま・ご入塾者さまともに、ご入塾が確定した場合、Amazonギフト券3,000円分をそれぞれ進呈しております。</p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">途中で退塾する場合、解約料はかかりますか？</h3>
                  <p class="p-contact-faq__answer">
                    解約料は一切かかりません。<br>
                    安心してご検討いただければと思います。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">退塾の手続きはどのようにすればよいですか？</h3>
                  <p class="p-contact-faq__answer">
                    退塾をご希望の場合は、前月25日までにお申し出ください。<br>
                    それ以降のご連絡の場合、当月分のご返金はできかねますので、あらかじめご了承ください。
                  </p>
                </li>
              </ul>
            </details>
            <details class="p-contact-faq__details">
              <summary class="p-contact-faq__summary">受講について</summary>
              <ul class="p-contact-faq__list">
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">受講料の支払い方法を教えてください。</h3>
                  <p class="p-contact-faq__answer">
                    受講料は、毎月、口座引き落としにてお支払いいただきます。<br>
                    引き落とし日は、原則として毎月27日です。<br>
                    口座登録などの詳細につきましては、ご入塾時にあらためてご案内いたします。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">諸経費や教材費はかかりますか？</h3>
                  <p class="p-contact-faq__answer">
                    はい。諸経費として年間2,750円（税込）を頂戴しております。<br>
                    こちらには、教材管理費・プリント代などが含まれます。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">どのような教材を使用しますか？</h3>
                  <p class="p-contact-faq__answer">
                    対象学年・受講内容により使用教材は異なります。<br>
                    また、生徒さま一人ひとりの学力や目標（定期テスト対策・受験対策など）に応じて、最適な教材を個別に選定いたします。<br>
                    学校教材や市販教材を使用する場合もあります。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">欠席や遅刻の連絡方法を教えてください。</h3>
                  <p class="p-contact-faq__answer">
                    欠席・遅刻のご連絡は、学習管理システム 「Comiru（コミル）」 を通じて行っていただきます。<br>
                    スマートフォンやPCから、24時間いつでもご連絡が可能です。<br>
                    ※原則として、お電話や個別LINEでの欠席連絡は受け付けておりません。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">欠席した場合、授業の振替や返金はありますか？</h3>
                  <p class="p-contact-faq__answer">
                    以下の通りです。<br>
                    ・授業日の前日までに、Comiru上でご連絡をいただいた場合 → 振替授業が可能です。<br>
                    ・授業当日（24時間以内）のご連絡、または無断欠席の場合 → 授業は実施扱いとなり、振替・返金はできません。<br>
                    ※講師手配の都合上、あらかじめご了承ください。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">振替授業はどのように行いますか？</h3>
                  <p class="p-contact-faq__answer">
                    振替授業は、Comiruの座席表（全講師のスケジュール）から、ご希望の講師・日時を選んで予約していただきます。<br>
                    ご都合や学習内容に合わせて、柔軟に調整が可能です。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">授業時間や曜日の変更はできますか？</h3>
                  <p class="p-contact-faq__answer">
                    講師の空き状況に応じて、Comiru上で日時・講師を選択し、変更や振替が可能です。<br>
                    固定制ではなく、ライフスタイルに合わせた受講ができます。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">「完全1対1個別指導」とは、どのような指導形態ですか？</h3>
                  <p class="p-contact-faq__answer">
                    元城アカデミーでは、講師1名が、60分間すべてを一人の生徒に対応する「完全1対1の個別指導」を行っています。<br>
                    同じ時間帯に、他の生徒を同時に指導することはありません。生徒一人ひとりの理解度や進度に合わせて、解説・演習・質問対応・学習計画まで、すべてを個別に行います。<br>
                    ※一般的な「1対2」「1対3」の個別指導とは異なります。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">受講料が1時間5,500円（税込）なのはなぜですか？</h3>
                  <p class="p-contact-faq__answer">
                    元城アカデミーでは、完全1対1の個別指導を、安定した品質で提供することを最も重視しています。<br>
                    ・講師は、採用基準を満たした学生のみ<br>
                    ・指導時間60分すべてを一人の生徒に集中<br>
                    ・学年・成績に関わらず、指導の質は同一<br>
                    そのため、学年別の料金差は設けておりません。<br>
                    「短時間でも密度の高い指導を受けたい」「質問しやすい環境で、理解を深めたい」という生徒さまにとって、最も効果的な学習時間となるよう設計しています。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">宿題は出ますか？</h3>
                  <p class="p-contact-faq__answer">
                    生徒さまの理解度や学習状況に応じて、必要に応じて宿題を出しています。<br>
                    量よりも「目的」と「効果」を重視し、授業内容の定着につながる課題を設定します。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">担当講師は固定ですか？</h3>
                  <p class="p-contact-faq__answer">
                    固定ではありません。Comiruの座席表から、ご希望の講師・日時を選んで受講していただけます。<br>
                    相性や学習内容に応じて、講師を選びながら受講することも可能です。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">学生講師ですが、大丈夫でしょうか？</h3>
                  <p class="p-contact-faq__answer">
                    元城アカデミーでは、採用基準を満たした学生講師のみが指導を行っています。<br>
                    指導内容・進め方については、教室として一定の方針を共有しており、誰が担当しても指導の質が大きく変わらない体制を整えています。<br>
                    また、完全1対1指導のため、生徒一人ひとりにしっかりと向き合った指導が可能です。
                  </p>
                </li>
              </ul>
            </details>
            <details class="p-contact-faq__details">
              <summary class="p-contact-faq__summary">設備・その他</summary>
              <ul class="p-contact-faq__list">
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">自習室はありますか？</h3>
                  <p class="p-contact-faq__answer">
                    現在、常設の自習室は設けておりません。<br>
                    ただし、今後の運営状況に応じて、自習利用の時間帯やスペースの確保を検討しています。<br>
                    詳細が決まり次第、あらためてご案内いたします。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">教室内はどのような環境ですか？</h3>
                  <p class="p-contact-faq__answer">
                    教室は、完全1対1の個別指導に集中できる環境を重視しています。<br>
                    机の配置や動線にも配慮し、講師と生徒が落ち着いて向き合える空間設計となっています。<br>
                    ※大人数での一斉授業や、複数人を同時に指導する形式は行っておりません。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">教室内での飲食は可能ですか？</h3>
                  <p class="p-contact-faq__answer">
                    水筒・ペットボトルなどの飲み物は持ち込み可能です。<br>
                    軽食につきましては、授業の妨げにならない範囲であれば可能ですが、においの強いものや音の出る飲食物はご遠慮ください。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">保護者が教室内で授業の様子を見ることはできますか？</h3>
                  <p class="p-contact-faq__answer">
                    原則として、授業中の教室内への立ち入りはご遠慮いただいております。生徒が集中して学習できる環境を保つため、ご理解ください。<br>
                    授業内容につきましては、Comiruを通じたご連絡等でお伝えいたします。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">保護者との連絡手段は何になりますか？</h3>
                  <p class="p-contact-faq__answer">
                    保護者の方との連絡は、学習管理システム「Comiru（コミル）」を基本としています。<br>
                    授業連絡・欠席連絡・振替予約・お知らせ配信などを、すべて一元管理しております。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">駐車場・駐輪場はありますか？</h3>
                  <p class="p-contact-faq__answer">
                    駐輪場はございますので、自転車での通塾が可能です。<br>
                    専用の駐車場はございませんが、送迎の際に限り、塾の前に一時的に停車していただくことは可能です。<br>
                    ※長時間の駐車はご遠慮いただき、周囲の交通や近隣へのご配慮をお願いいたします。<br>
                    また、教室周辺にはコインパーキングもございますので、お時間を要する場合やご面談時などは、そちらのご利用をご検討ください。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">防犯・安全面の対策はどのようになっていますか？</h3>
                  <p class="p-contact-faq__answer">
                    教室では、スマートキーによる入退室管理を行っており、関係者以外が自由に出入りできない仕組みを整えています。<br>
                    また、授業は完全予約制のため、教室内には原則として講師と受講生のみが在室します。<br>
                    安心して通塾いただける環境づくりを重視しています。
                  </p>
                </li>
                <li class="p-contact-faq__item">
                  <h3 class="p-contact-faq__question">体験授業はありますか？</h3>
                  <p class="p-contact-faq__answer">
                    体験授業の実施については、時期や状況に応じて対応しております。<br>
                    ご希望の方は、お問い合わせフォームよりご相談ください。
                  </p>
                </li>
              </ul>
            </details>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>