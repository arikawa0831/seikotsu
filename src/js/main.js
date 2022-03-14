import Scroll from './scroll'

document.addEventListener('DOMContentLoaded', () => {

  function init() {
    new Scroll();
  }

  // アンカースクロール
  $('a[href^="#"]').click(function () {
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var headerHeight = $('.l-header').outerHeight();
    var position = target.offset().top - headerHeight;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });

  init();

});
