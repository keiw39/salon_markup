// スムーススクロールの設定
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]')
    .not('.class')
    .not('.js-modal-open')
    .click(function () {
      // スクロールの速度
      var speed = 200; // ミリ秒
      // アンカーの値取得
      var href = $(this).attr('href');
      // 移動先を取得
      var target = $(href == '#' || href == '' ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top - 0;
      // スムーススクロール
      $('body,html').animate({ scrollTop: position }, speed, 'swing');
      return false;
    });
});

// humburger menu 開閉
$(
  (function () {
    $('#js-hamburger__toggle').on('click', function () {
      $('#js-hamburger__toggle').toggleClass('is-active');
      $('.l-spMenu').toggleClass('is-active');
    });
  })()
);

// メニューの内部リンククリック後にメニューを閉じる
$(
  (function () {
    $('.l-spMenu__navLink').on('click', function () {
      $('.l-spMenu').removeClass('is-active');
      $('#js-hamburger__toggle').removeClass('is-active');
    });
  })()
);

// フェードインアニメーション
$('.fadein').css('visibility', 'hidden');
$(window).on('load scroll', function () {
  var windowHeight = $(window).height(),
    topWindow = $(window).scrollTop();
  $('.fadein').each(function () {
    var targetPosition = $(this).offset().top;
    if (topWindow > targetPosition - windowHeight + 100) {
      $(this).addClass('l-fade-in');
    }
  });
});

// モーダルウィンドウ開閉
// ウィンドウを開く
$('.js-modal-open').each(function () {
  $(this).on('click', function () {
    var target = $(this).data('target');
    var modal = document.getElementById(target);
    $(modal).fadeIn(300);
    return false;
  });
});

// ウィンドウを閉じる
$('.js-modal-close').on('click', function () {
  $('.c-modal').fadeOut(300);
  return false;
});

// simpleParallax.js
document.addEventListener('DOMContentLoaded', function () {
  const elem = document.querySelector('.js-target-parallax');
  if (elem !== null) {
    //クラス名js-target-parallaxがあるか判定
    let target = document.getElementsByClassName('js-target-parallax'); //クラス名js-target-parallaxがある要素をすべて取得

    let parallaxConfig = {
      //simpleParallaxの設定
      delay: 0,
      orientation: 'down',
      scale: 1.5,
      overflow: true, //必要なら
      //maxTransition : 50 //必要なら
    };

    const parallax_instance = new simpleParallax(target, parallaxConfig);
  }
});

// Luxy.jsを使用した時のアンカーリンクが制御できない不具合の修正
$(function () {
  // ナビゲーションのリンクを指定
  var navLink = $('.c-page__top');

  // 各コンテンツのページ上部からの開始位置と終了位置を配列に格納しておく
  var contentsArr = new Array();
  for (var i = 0; i < navLink.length; i++) {
    // コンテンツのIDを取得
    var targetContents = navLink.eq(i).attr('href');
    // ページ内リンクでないナビゲーションが含まれている場合は除外する
    if (targetContents.charAt(0) == '#') {
      // ページ上部からコンテンツの開始位置までの距離を取得
      var targetContentsTop = $(targetContents).offset().top;
      // ページ上部からコンテンツの終了位置までの距離を取得
      var targetContentsBottom =
        targetContentsTop + $(targetContents).outerHeight(true) - 1;
      // 配列に格納
      contentsArr[i] = [targetContentsTop, targetContentsBottom];
    }
  }

  // 現在地をチェックする
  function currentCheck() {
    // 現在のスクロール位置を取得
    var windowScrolltop = $(window).scrollTop();
    for (var i = 0; i < contentsArr.length; i++) {
      // 現在のスクロール位置が、配列に格納した開始位置と終了位置の間にあるものを調べる
      if (
        contentsArr[i][0] <= windowScrolltop &&
        contentsArr[i][1] >= windowScrolltop
      ) {
        // 開始位置と終了位置の間にある場合、ナビゲーションにclass="current"をつける
        navLink.removeClass('current');
        navLink.eq(i).addClass('current');
        i == contentsArr.length;
      }
    }
  }

  // ページ読み込み時とスクロール時に、現在地をチェックする
  $(window).on('load scroll', function () {
    currentCheck();
  });

  // ナビゲーションをクリックした時のスムーズスクロール
  navLink.click(function () {
    $('html,body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top,
      },
      100
    );
    return false;
  });
});

!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();
