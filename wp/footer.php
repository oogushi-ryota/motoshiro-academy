  <footer class="l-footer">
    <div class="l-footer__head">
      <p class="l-footer__head-txt">お問合せはお電話・メール・公式LINEから！</p>
      <a href="tel:0535434999" class="l-footer__head-tel">053-543-4999</a>
      <ul class="l-footer__head-list">
        <li class="l-footer__head-item">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="l-footer__head-link">メール</a>
        </li>
        <li class="l-footer__head-item">
          <a href="tel:0535434999" class="l-footer__head-link">お電話</a>
        </li>
        <li class="l-footer__head-item">
          <a href="https://line.me/R/ti/p/@479fhrdb" class="l-footer__head-link" target="_blank" rel="noopener noreferrer">公式ライン</a>
        </li>
      </ul>
    </div>
    <div class="l-footer__bg">
      <div class="l-footer__inner">
        <nav class="l-footer__nav">
          <ul class="l-footer__nav-list">
            <li class="l-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-footer__nav-link">ホーム</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="l-footer__nav-link">塾・講師紹介</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="l-footer__nav-link">コース・料金</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="l-footer__nav-link">お問い合わせ・Q&A</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo esc_url( home_url( '/column/' ) ); ?>" class="l-footer__nav-link">コラム</a>
            </li>
          </ul>
        </nav>
        <div class="l-footer__wrap">
          <div class="l-footer__cont">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-footer__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="元城アカデミー" width="500" height="102">
            </a>
            <address class="l-footer__address">〒432-8012　静岡県浜松市中央区布橋1-7-8 ダイワビル1F</address>
            <span class="l-footer__copy">
              姉妹校：[松城ゼミナール（英語専門塾）](<a href="https://matsushiro-seminar.jp" class="l-footer__copy-link" target="_blank">https://matsushiro-seminar.jp</a>)<br>
              © 2025 元城アカデミー（Motoshiro Academy）All Rights Reserved.
            </span>
          </div>
          <div class="l-footer__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.3372745075108!2d137.71627627586102!3d34.721891982075334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601adefa1a40e249%3A0xd54d3f74643c548!2z44CSNDMyLTgwMTIg6Z2Z5bKh55yM5rWc5p2-5biC5Lit5aSu5Yy65biD5qmL77yR5LiB55uu77yX4oiS77yY!5e0!3m2!1sja!2sjp!4v1770906353826!5m2!1sja!2sjp" width="640" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  <script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
</body>
</html>