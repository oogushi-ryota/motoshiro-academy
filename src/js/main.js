// === 外部ライブラリ読み込み ===
import "swiper/css/bundle";

// === ユーティリティライブラリ読み込み ===
import { initHamburgerMenu } from "./utils/hamburgerUtils.js";
import { initAnchorSmoothScroll } from "./utils/scrollUtils.js";
// import { initTabs } from "./utils/tabUtils.js";
import { preventEnterSubmit } from "./utils/formUtils.js";

// HTMLの構造がすべて解析されて、DOM操作が安全に行える状態になったタイミングで実行
window.addEventListener('DOMContentLoaded', () => {
  initHamburgerMenu({           // ← ハンバーガーメニュー
    navSelector: ".js-nav",
    btnSelector: ".js-nav-btn",
    closeTargetSelector: ".g-nav__item a",
  });

  // initTabs()            //タブ切り替え
  initAnchorSmoothScroll();     // ← スムーススクロール
  preventEnterSubmit();
});