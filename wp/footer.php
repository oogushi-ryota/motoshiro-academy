<footer class="l-footer">
    <div class="c-inner">
      <div class="l-footer__cont">
        <div class="l-footer__blk">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-footer__logo">
            <picture class="l-header__logo-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_footer.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_footer.png" alt="株式会社クラフトマンのロゴ" width="300" height="52">
            </picture>
          </a>
          <a href="https://www.craftman-1226.com/" class="l-footer__link" target="_blank">コーポレートサイト</a>
        </div>
        <small class="l-footer__small">© 株式会社クラフトマン All rights reserved.</small>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  <script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
</body>
</html>