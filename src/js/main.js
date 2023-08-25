import Scroll from './scroll'

document.addEventListener('DOMContentLoaded', () => {

  function init() {
    new Scroll();
  }

  // // アンカースクロール
  // $('a[href^="#"]').click(function () {
  //   var speed = 400;
  //   var href = $(this).attr("href");
  //   var target = $(href == "#" || href == "" ? 'html' : href);
  //   var headerHeight = $('.l-header').outerHeight();
  //   var position = target.offset().top - headerHeight;
  //   $('body,html').animate({ scrollTop: position }, speed, 'swing');
  //   return false;
  // });

  //ハンバーガーメニュー
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');

  hamburger.addEventListener('click', function () {
    body.classList.toggle('nav-open');
  });

  $('#l-header-sp a[href]').on('click', function (event) {
    body.classList.remove('nav-open');
  });

  /**
* 到達したら要素を表示させる
*/
  function showElementAnimation() {

    var element = document.getElementsByClassName('js-animation');
    if (!element) return; // 要素がなかったら処理をキャンセル

    var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
    var scrollY = window.pageYOffset;
    var windowH = window.innerHeight;

    for (var i = 0; i < element.length; i++) {
      var elemClientRect = element[i].getBoundingClientRect(); var elemY = scrollY + elemClientRect.top; if (scrollY + windowH - showTiming > elemY) {
        element[i].classList.add('is-show');
      } else if (scrollY + windowH < elemY) {
        // 上にスクロールして再度非表示にする場合はこちらを記述
        element[i].classList.remove('is-show');
      }
    }
  }
  showElementAnimation();
  window.addEventListener('scroll', showElementAnimation);



  init();

});
