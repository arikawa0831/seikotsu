    <footer class="l-footer">
      <div class="l-footer__top">
        <div class="l-footer__top__grid">
          <div class="l-footer__top__logo">
            <a href="<?php echo home_url(); ?>/">
              <img src="<?php echo get_template_directory_uri(); ?>/public/img/logo.png" alt="BodyArt">
            </a>
          </div>
          <div class="l-footer__top__links">
            <ul>
              <li>
                <a href="<?php echo home_url(); ?>/">HOME</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/price">コース・料金</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/feature">身体芸術の特徴</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/access">アクセス</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/news">新着情報</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="l-footer__copy">
        <p>©︎2023 BodyArt -FUSION OF BEAUTY AND HEALTH-</p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/public/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/public/js/jquery.sliderPro.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#slider').sliderPro({
          autoHeight: true,
          width: '100%',
          buttons: false,
          autoplayOnHover: 'none',
          visibleSize: 'all',
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $('#slider2').sliderPro({
          autoHeight: true,
          width: '100%',
          buttons: true,
          autoplayOnHover: 'none',
          visibleSize: 'all',
        });
      });
    </script>
  <?php wp_footer(); ?>
  </body>

</html>
