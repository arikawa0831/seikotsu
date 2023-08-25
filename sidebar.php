<aside id="l-sidebar">
  <div class="l-sidebar__category">
    <h3>
      <span>CATEGORY</span><br>
      <span>カテゴリ</span>
    </h3>
    <ul>
      <li>
        <a href="<?php echo home_url(); ?>/news">全記事</a>
      </li>
        <?php
        $terms = get_terms('news_category'); // タクソノミーの指定
        foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
        }
        ?>
    </ul>
  </div>
  <div class="l-sidebar__archive">
    <h3>
      <span>ARCHIVE</span><br>
      <span>過去記事</span>
    </h3>
    <ul>
      <?php
        $args = array(
            'type' => 'yearly', // 年別アーカイブ。'monthly'なら月別
            'show_post_count' => false, // 記事件数を表示する
            'post_type' => 'news', // 投稿タイプ名
        );
        wp_get_archives($args);
      ?>
    </ul>
  </div>
  <div class="l-sidebar__reccomend">
    <h3>
      <span>NEW POST</span><br>
      <span>最新記事</span>
    </h3>
    <?php
    $paged = get_query_var('paged')? get_query_var('paged') : 1;
    $args = [
    'post_type' => 'news',
    'posts_per_page' => 5,
    'paged' => $paged,
    'order' => 'DESC',
    ];
    $my_query = new WP_Query($args); ?>
    <?php if ($my_query->have_posts()): ?>
    <ul>
      <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li>
        <a href="<?php the_permalink($post->ID); ?>">
          <div class="l-sidebar__reccomend__item__image">
            <?php if ( has_post_thumbnail() ): ?>
              <?php echo get_the_post_thumbnail( $post_id, 'article', array( 'class' => '' ) ); ?>
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/public/img/noimage.png" alt="アイキャッチがない時の画像です。" class="c-wadai__image__img" />
            <?php endif; ?>
          </div>
          <div class="l-sidebar__reccomend__item__texts">
            <div class="l-sidebar__reccomend__item__texts__date"><?php the_time('Y.m.d'); ?></div>
            <h4>
              <?php
              if(mb_strlen($post->post_title)>7) {
                $title= mb_substr($post->post_title,0,7) ;
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
              ?>
            </h4>
            <div class="l-sidebar__reccomend__item__texts__category">
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
          </div>
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php else: // 投稿がない場合?>
    <p>まだ投稿がありません。</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</aside>
