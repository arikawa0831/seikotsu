<?php get_header(); ?>
<?php
/*
Template Name: 新着情報
*/
?>
<?php get_header(); ?>

<div class="p-news">
  <div class="p-news__top">
    <div class="l-under-main">
      <div class="l-under-main__grid">
        <div class="l-under-main__texts">
          <h1>
            <span>NEWS</span><br>
            <span>新着情報</span>
          </h1>
        </div>
        <div class="l-under-main__image">
          <img class="pc-only" src="<?php echo get_template_directory_uri(); ?>/public/img/under-main.jpg" alt="整骨院内装">
          <img class="sp-only" src="<?php echo get_template_directory_uri(); ?>/public/img/under-main-sp.jpg" alt="整骨院内装">
        </div>
      </div>
    </div>
  </div>
  <div class="p-news__pagenavi">
    <div class="l-pagenavi">
      <div class="l-pagenavi__grid">
        <a href="<?php echo home_url(); ?>/" class="l-pagenavi__back">ホーム</a>
        <a href="<?php echo home_url(); ?>/news" class="l-pagenavi__back">新着情報</a>
        <span class="l-pagenavi__now">
          <?php
          if(mb_strlen($post->post_title)>10) {
            $title= mb_substr($post->post_title,0,10) ;
              echo $title . '...';
            } else {
              echo $post->post_title;
            }
          ?>
        </span>
      </div>
    </div>
  </div>
  <div class="p-news__contents">
    <div class="p-news__contents__grid">
      <div class="p-news__main">
        <div class="p-news__main__detail">
          <div class="p-news__main__detail__head">
            <span class="p-news__main__detail__head__date"><?php echo get_post_time( 'Y.m.d' ); ?></span>
            <?php
              if ($terms = get_the_terms($post->ID, 'news_category')) {
                foreach ( $terms as $term ) {
                    $term_slug = $term -> slug;
                    echo ('<span class="p-news__main__detail__head__category">') ;
                    echo esc_html($term->name)  ;
                    echo ('</span>') ;
                }
              }
            ?>
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="p-news__main__detail__contents">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="p-news__side"><?php get_sidebar(); ?></div>
    </div>
  </div>
  <div class="p-news__reserve">
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


<?php get_footer(); ?>
