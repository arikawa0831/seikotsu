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
            <span>
              <?php
                if ($terms = get_the_terms($post->ID, 'news_category')) {
                  foreach ( $terms as $term ) {
                      echo esc_html($term->name)  ;
                  }
                }
              ?>
            </span>
          </h1>
        </div>
        <div class="l-under-main__image">
          <img src="<?php echo get_template_directory_uri(); ?>/public/img/under-main.jpg" alt="整骨院内装">
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
            if ($terms = get_the_terms($post->ID, 'news_category')) {
              foreach ( $terms as $term ) {
                  echo esc_html($term->name)  ;
              }
            }
          ?>
        </span>
      </div>
    </div>
  </div>
  <div class="p-news__contents">
    <div class="p-news__contents__grid">
      <div class="p-news__main">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $taxonomy_name  = get_query_var('taxonomy');
        $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name, 'term' => $taxonomy->slug ) );
        $term_var = get_query_var( 'term' );
        $myQuery = new WP_Query();
        $param = array(
            'paged' => $paged,
            'posts_per_page' => '9',
            'post_type' => 'news',
            'taxonomy' => $taxonomy_name,
            'term' => $term_var,
        );
          $myQuery->query($param);
        ?>
        <ul>
        <?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
          <li class="p-news__main__item">
            <a href="<?php the_permalink($post->ID); ?>">
              <div class="p-news__main__item__image">
                <?php if ( has_post_thumbnail() ): ?>
                  <?php echo get_the_post_thumbnail( $post_id, 'article', array( 'class' => '' ) ); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/public/img/noimage.png" alt="アイキャッチがない時の画像です。" class="c-wadai__image__img" />
                <?php endif; ?>
              </div>
              <div class="p-news__main__item__texts">
                <div class="p-news__main__item__texts__date"><?php the_time('Y.m.d'); ?></div>
                <h3>
                  <?php
                  if(mb_strlen($post->post_title)>16) {
                    $title= mb_substr($post->post_title,0,16) ;
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                  ?>
                </h3>
                <div class="p-news__main__item__texts__category">
                <?php
                  if ($terms = get_the_terms($post->ID, 'news_category')) {
                    foreach ( $terms as $term ) {
                        $term_slug = $term -> slug;
                        echo ('<span>') ;
                        echo esc_html($term->name)  ;
                        echo ('</span>') ;
                    }
                  }
                ?>
                </div>
                <div class="p-news__main__item__texts__excerpt pc-only">
                  <span><?php echo mb_substr( get_the_excerpt(), 0, 40 ) . '...'; ?></span>
                </div>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php else:?>
        <p>ただいま新着情報がございません。</p>
        <?php endif; wp_reset_postdata(); ?>
        <div class="p-news__main__pagenavi">
        <?php 
          if(function_exists('wp_pagenavi')):
            wp_pagenavi(array('query'=>$myQuery));
          endif;
            wp_reset_postdata();
        ?>
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
