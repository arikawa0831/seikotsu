<?php
/*
Template Name: アクセス
*/
?>
<?php get_header(); ?>

<div class="p-access">
  <div class="p-access__top">
    <div class="l-under-main">
      <div class="l-under-main__grid">
        <div class="l-under-main__texts">
          <h1>
            <span>ACCESS</span><br>
            <span>店舗情報</span>
          </h1>
        </div>
        <div class="l-under-main__image">
          <img class="pc-only" src="<?php echo get_template_directory_uri(); ?>/public/img/under-main.jpg" alt="整骨院内装">
          <img class="sp-only" src="<?php echo get_template_directory_uri(); ?>/public/img/under-main-sp.jpg" alt="整骨院内装">
        </div>
      </div>
    </div>
  </div>
  <div class="p-access__pagenavi">
    <div class="l-pagenavi">
      <div class="l-pagenavi__grid">
        <a href="<?php echo home_url(); ?>/" class="l-pagenavi__back">ホーム</a>
        <span class="l-pagenavi__now">店舗情報</span>
      </div>
    </div>
  </div>
  <div class="p-access__contents">
    
  </div>
  <div class="p-access__reserve">
    <div class="l-reserve">
      <div class="l-reserve__grid">
        <div class="l-reserve__heading">
          <span class="l-reserve__heading__big">Reserve</span><br>
          <span class="l-reserve__heading__small">施術のご予約</span>
        </div>
        <h2>一度、身体芸術整骨院を体験してみませんか？<br>施術前後のカラダの違いを感じてみてください。</h2>
        <p>身体芸術整骨院ならではの「丁寧なカウンセリング」「徹底的な分析」「施術計画のご提案」<br>「独自の調整技術」を体験してください。お電話・WEBからご予約ください。</p>
        <div class="l-reserve__links">
          <a class="l-reserve__links__reserve" href="https://beauty.hotpepper.jp/" target="_blank" rel="noopener noreferrer">
            <i class="fa-regular fa-calendar fa-3x"></i>
            <span>ご予約はこちら</span>
          </a>
          <a class="l-reserve__links__price" href="<?php echo home_url(); ?>/price">
            <i class="fa-solid fa-sheet-plastic fa-3x"></i>
            <span>コース・料金について</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
