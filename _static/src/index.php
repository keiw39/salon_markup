<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ヘアスタイルが変わると、毎日が変わる。
わたしたちはヘアを通して、そんな毎日へのお手伝いをします。" />
  <link rel=”canonical” href=”http://example.com/”>
  <link rel="shortcut icon" href="./img/nine.ico" />
  <title>NiNe.</title>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/27f7c35d10.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet" />
  <!-- style.css読み込み -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- simpleParallax.js読み込み -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/simple-parallax-js@5.6.2/dist/simpleParallax.min.js"></script>
</head>
<body>
  <div id="top" class="wrap" ontouchstart="">
    <!-- header -->
    <header class="l-header">
      <div class="l-header__wrap l-container">
        <h1 class="l-header__logoWrap">
            <a href="index.html" class="l-header__logoLink"> NiNe. </a>
          </h1>
        <div class="l-menu">
          <!-- header-desktop-menu -->
          <nav class="l-desktopMenu__nav">
            <div class="l-desktopMenu__navWrap">
              <div class="l-desktopMenu__navItem -phone">
                <i class="fas fa-phone-alt"></i><span>0123-456-7890</span>
              </div>
              <ul class="l-desktopMenu__navList">
                <li class="l-desktopMenu__navItem">
                  <a href="#" class="l-desktopMenu__navLink">Home</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="#concept" class="l-desktopMenu__navLink">
                    Concept</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="#staff" class="l-desktopMenu__navLink">Staff</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="#menu" class="l-desktopMenu__navLink">Menu</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="#access" class="l-desktopMenu__navLink">Access</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- /header-desktop-menu -->
          <a href="#" class="l-menu__btn -reserve">
            <div class="l-menu__btnWrap">
              <p class="l-menu__btnText">RESERVE</p>
              <div class="l-menu__btnImg"></div>
            </div>
          </a>
          <!-- header-nav-toggle -->
          <a href="#" id="js-hamburger__toggle" class="l-hamburger__toggle disable">
            <p class="l-hamburger__text">MENU</p>
            <div class="l-hamburger__toggleWrap">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- /header-nav-toggle -->
        </div>
      </div>
    </header>
    <!-- /header -->
    <!-- header-sp-menu -->
    <div class="l-spMenu">
      <div class="l-container">
        <nav class="l-spMenu__nav">
          <ul class="l-spMenu__navList">
            <li class="l-spMenu__navItem">
              <a href="index.html" class="l-spMenu__navLink">Home</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="#" class="l-spMenu__navLink">Concept</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="#" class="l-spMenu__navLink">Staff</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="#" class="l-spMenu__navLink">Menu</a>
            </li>
            <li class="l-spMenu__navItem">
              <a href="#" class="l-spMenu__navLink">Access</a>
            </li>
            <li class="l-spMenu__navItem -phone">
              <i class="fas fa-phone-alt"></i><span>0123-456-7890</span>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /header-sp-menu -->
    <!-- main -->
    <main>
      <article>
        <div class="p-home__mv">
          <div class="p-home__mv__imgWrap">
            <picture>
              <source srcset="../img/p-home__mv_bg@2x.jpg" media="(min-width: 640px)" />
              <img src="../img/p-home__mv_bg_sp@2x.jpg" width="414" height="500" decoding="async" alt="メインヴィジュアルの画像" class="p-home__mv__img js-target-parallax" />
            </picture>
          </div>
          <div class="l-container">
            <div class="p-home__mv__textWrap fadein">
              <h2 class="p-home__mv__catchTitle">NEW HAIR.<br />NEW DAYS.</h2>
              <h3 class="p-home__mv__subTitle">
                  ヘアスタイルが変わると、毎日が変わる。<br />
                  わたしたちはヘアを通して、 <br class="u-hidden-sm" />
                  そんな毎日へのお手伝いをします。
                </h3>
            </div>
          </div>
          <p class="c-scroll-line">
              <span class="c-scroll-text">SCROLL</span>
            </p>
        </div>
        <section id="concept" class="p-home__sec-concept l-section">
          <div class="l-container fadein">
            <h2 class="l-section__title">Concept</h2>
            <div class="c-listConcept__wrap">
              <p class="l-section__text">
                  徹底的に髪、頭皮に優しい商材にこだわり、大人女性のお悩みの白髪、うねりなどお悩みをポジティブに解決します。<br />
                  ファミリースペースもあるので、お子様連れのお客様も気兼ねなく通っていただけます。<br />
                  あなただけのプライベート空間で極上の時間をお過ごしください。
                </p>
              <div class="c-listConcept__btnWrap">
                <a href="#" class="c-listConcept__btn"> More </a>
              </div>
            </div>
          </div>
        </section>
        <section id="information" class="p-home__sec-info l-section">
          <div class="l-container">
            <div class="c-listInfo__wrap fadein">
              <div class="c-listInfo__item">
                <h2 class="l-section__title">Information</h2>
                <div class="c-listInfo__detailWrap">
                  <div class="c-listInfo__detailInner">
                    <h3 class="c-listInfo__detailTitle">OPEN</h3>
                    <p class="l-section__text">11:00 - 20:00</p>
                    <div class="c-listInfo__detailText">
                      <p class="l-section__text">最終受付：</p>
                      <p class="l-section__text">
                          カット 19:00 / <br class="u-hidden-sm" />
                          パーマ・カラー 18:00
                        </p>
                    </div>
                  </div>
                  <div class="c-listInfo__detailInner">
                    <h3 class="c-listInfo__detailTitle">CLOSED</h3>
                    <p class="l-section__text">月曜日</p>
                    <div class="c-listInfo__detailText">
                      <p class="l-section__text">※祝日の場合は火曜日休み</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-listInfo__item">
                <div class="c-listImg fadein">
                  <picture>
                    <source srcset="./img/listInfo_img@2x.jpg" media="(min-width: 640px)" />
                    <img src="./img/listInfo_img_sp@2x.jpg" width="160" height="200" decoding="async" alt="内観の画像" class="c-listImg__img js-target-parallax" />
                  </picture>
                </div>
              </div>
            </div>
            <div class="c-listInfo__imgWrap fadein">
              <img src="../img/listInfo_img_big@2x.jpg" width="1283" height="600" decoding="async" alt="髪を洗う女性の画像" class="c-listInfo__img js-target-parallax" />
            </div>
          </div>
        </section>
        <section id="staff" class="p-home__sec-staff l-section">
          <div class="l-container">
            <h2 class="l-section__title fadein">Staff</h2>
            <div class="c-listStaff__wrap">
              <div class="c-listStaff__item fadein">
                <figure class="c-listStaff__itemInner">
                  <div class="c-listStaff__thumbWrap">
                    <img src="/img/c-listStaff_img_01@2x.jpg" width="333" height="420" decoding="async" alt="オーナー兼ディレクターの画像" class="c-listStaff__img" />
                    <a href="" class="js-modal-open c-listStaff__popupToggle" data-target="modal01">
                      <img src="/img/c-listStaff__popupToggle_img@2x.png" width="30" height="30" decoding="async" alt="スタッフ詳細へのリンクの画像" class="c-listStaff__popupToggle__img" />
                    </a>
                  </div>
                  <figcaption>
                    <p class="c-listStaff__jobs">owner / director</p>
                    <h3 class="c-listStaff__name">山田 涼子</h3>
                  </figcaption>
                </figure>
              </div>
              <!-- modal01 -->
              <div id="modal01" class="c-modal js-modal">
                <div class="c-modal__bg js-modal-close"></div>
                <div class="c-modal__wrap">
                  <div class="c-modal__item">
                    <div class="c-modal__imgWrap">
                      <img src="/img/c-listStaff_img_01@2x.jpg" width="333" height="420" decoding="async" alt="オーナー兼ディレクターの画像" class="c-modal__img" />
                    </div>
                  </div>
                  <div class="c-modal__item">
                    <div class="c-modal__detailWrap">
                      <div class="c-modal__titleWrap">
                        <p class="c-modal__subTitle">owner / director</p>
                        <h2 class="c-modal__title">山田 涼子</h2>
                      </div>
                      <div class="c-modal__commentWrap">
                        <h3 class="c-modal__commentTitle">MESSAGE</h3>
                        <p class="c-modal__commentText">
                            お客様からしっかりとお話を聞くことにより、
                            一人一人の髪質や骨格、ライフスタイルに合わせたスタイル提案を
                            日々心がけています。また技術に関しても常に新しいものを取り入れる
                            努力を惜しまず、お客様に様々なメニューをご提供いたします。
                          </p>
                        <h3 class="c-modal__commentTitle">STYLE</h3>
                        <p class="c-modal__commentText">
                            ドライカットでの質感調整が得意です。
                            また、パーマやカラーでの似合わせも得意です。
                          </p>
                      </div>
                    </div>
                  </div>
                  <a class="c-modal__popupClose js-modal-close" href="">
                    <img src="../img/c-codal__popupClose_img@2x.png" width="54" height="54" decoding="async" alt="スタッフ詳細画面を閉じるの画像" class="c-modal__popupClose__img" />
                  </a>
                </div>
              </div>
              <!-- /modal01 -->
              <div class="c-listStaff__item fadein">
                <figure class="c-listStaff__itemInner">
                  <div class="c-listStaff__thumbWrap">
                    <img src="/img/c-listStaff_img_02@2x.jpg" width="333" height="420" decoding="async" alt="マネージャー兼デザイナーの画像" class="c-listStaff__img" />
                    <a href="#" class="js-modal-open c-listStaff__popupToggle" data-target="modal02">
                      <img src="/img/c-listStaff__popupToggle_img@2x.png" width="30" height="30" decoding="async" alt="スタッフ詳細へのリンクの画像" class="c-listStaff__popupToggle__img" />
                    </a>
                  </div>
                  <figcaption>
                    <p class="c-listStaff__jobs">store manager / designer</p>
                    <h3 class="c-listStaff__name">桜井 奈美子</h3>
                  </figcaption>
                </figure>
              </div>
              <!-- modal02 -->
              <div id="modal02" class="c-modal js-modal">
                <div class="c-modal__bg js-modal-close"></div>
                <div class="c-modal__wrap">
                  <div class="c-modal__item">
                    <div class="c-modal__imgWrap">
                      <img src="/img/c-listStaff_img_02@2x.jpg" width="333" height="420" decoding="async" alt="マネージャー兼デザイナーの画像" class="c-modal__img" />
                    </div>
                  </div>
                  <div class="c-modal__item">
                    <div class="c-modal__detailWrap">
                      <div class="c-modal__titleWrap">
                        <p class="c-modal__subTitle">
                            store manager / designer
                          </p>
                        <h2 class="c-modal__title">桜井 奈美子</h2>
                      </div>
                      <div class="c-modal__commentWrap">
                        <h3 class="c-modal__commentTitle">MESSAGE</h3>
                        <p class="c-modal__commentText">
                            お客様からしっかりとお話を聞くことにより、
                            一人一人の髪質や骨格、ライフスタイルに合わせたスタイル提案を
                            日々心がけています。また技術に関しても常に新しいものを取り入れる
                            努力を惜しまず、お客様に様々なメニューをご提供いたします。
                          </p>
                        <h3 class="c-modal__commentTitle">STYLE</h3>
                        <p class="c-modal__commentText">
                            ドライカットでの質感調整が得意です。
                            また、パーマやカラーでの似合わせも得意です。
                          </p>
                      </div>
                    </div>
                  </div>
                  <a class="c-modal__popupClose js-modal-close" href="">
                    <img src="../img/c-codal__popupClose_img@2x.png" width="54" height="54" decoding="async" alt="スタッフ詳細画面を閉じるの画像" class="c-modal__popupClose__img" />
                  </a>
                </div>
              </div>
              <!-- /modal02 -->
              <div class="c-listStaff__item fadein">
                <figure class="c-listStaff__itemInner">
                  <div class="c-listStaff__thumbWrap">
                    <img src="/img/c-listStaff_img_03@2x.jpg" width="333" height="420" decoding="async" alt="デザイナーの画像" class="c-listStaff__img" />
                    <a href="#" class="js-modal-open c-listStaff__popupToggle" data-target="modal03">
                      <img src="/img/c-listStaff__popupToggle_img@2x.png" width="30" height="30" decoding="async" alt="スタッフ詳細へのリンクの画像" class="c-listStaff__popupToggle__img" />
                    </a>
                  </div>
                  <figcaption>
                    <p class="c-listStaff__jobs">designer</p>
                    <h3 class="c-listStaff__name">藪内 友季子</h3>
                  </figcaption>
                </figure>
              </div>
              <!-- modal03 -->
              <div id="modal03" class="c-modal js-modal">
                <div class="c-modal__bg js-modal-close"></div>
                <div class="c-modal__wrap">
                  <div class="c-modal__item">
                    <div class="c-modal__imgWrap">
                      <img src="/img/c-listStaff_img_03@2x.jpg" width="333" height="420" decoding="async" alt="デザイナーの画像" class="c-modal__img" />
                    </div>
                  </div>
                  <div class="c-modal__item">
                    <div class="c-modal__detailWrap">
                      <div class="c-modal__titleWrap">
                        <p class="c-modal__subTitle">designer</p>
                        <h2 class="c-modal__title">藪内 友季子</h2>
                      </div>
                      <div class="c-modal__commentWrap">
                        <h3 class="c-modal__commentTitle">MESSAGE</h3>
                        <p class="c-modal__commentText">
                            お客様からしっかりとお話を聞くことにより、
                            一人一人の髪質や骨格、ライフスタイルに合わせたスタイル提案を
                            日々心がけています。また技術に関しても常に新しいものを取り入れる
                            努力を惜しまず、お客様に様々なメニューをご提供いたします。
                          </p>
                        <h3 class="c-modal__commentTitle">STYLE</h3>
                        <p class="c-modal__commentText">
                            ドライカットでの質感調整が得意です。
                            また、パーマやカラーでの似合わせも得意です。
                          </p>
                      </div>
                    </div>
                  </div>
                  <a class="c-modal__popupClose js-modal-close" href="">
                    <img src="../img/c-codal__popupClose_img@2x.png" width="54" height="54" decoding="async" alt="スタッフ詳細画面を閉じるの画像" class="c-modal__popupClose__img" />
                  </a>
                </div>
              </div>
              <!-- /modal03 -->
              <div class="c-listStaff__item fadein">
                <figure class="c-listStaff__itemInner">
                  <div class="c-listStaff__thumbWrap">
                    <img src="/img/c-listStaff_img_04@2x.jpg" width="333" height="420" decoding="async" alt="デザイナーの画像" class="c-listStaff__img" />
                    <a href="" class="js-modal-open c-listStaff__popupToggle" data-target="modal04">
                      <img src="/img/c-listStaff__popupToggle_img@2x.png" width="30" height="30" decoding="async" alt="スタッフ詳細へのリンクの画像" class="c-listStaff__popupToggle__img" />
                    </a>
                  </div>
                  <figcaption>
                    <p class="c-listStaff__jobs">designer</p>
                    <h3 class="c-listStaff__name">吉安 友也</h3>
                  </figcaption>
                </figure>
              </div>
              <!-- modal04 -->
              <div id="modal04" class="c-modal js-modal">
                <div class="c-modal__bg js-modal-close"></div>
                <div class="c-modal__wrap">
                  <div class="c-modal__item">
                    <div class="c-modal__imgWrap">
                      <img src="/img/c-listStaff_img_04@2x.jpg" width="333" height="420" decoding="async" alt="デザイナーの画像" class="c-modal__img" />
                    </div>
                  </div>
                  <div class="c-modal__item">
                    <div class="c-modal__detailWrap">
                      <div class="c-modal__titleWrap">
                        <p class="c-modal__subTitle">designer</p>
                        <h2 class="c-modal__title">吉安 友也</h2>
                      </div>
                      <div class="c-modal__commentWrap">
                        <h3 class="c-modal__commentTitle">MESSAGE</h3>
                        <p class="c-modal__commentText">
                            お客様からしっかりとお話を聞くことにより、
                            一人一人の髪質や骨格、ライフスタイルに合わせたスタイル提案を
                            日々心がけています。また技術に関しても常に新しいものを取り入れる
                            努力を惜しまず、お客様に様々なメニューをご提供いたします。
                          </p>
                        <h3 class="c-modal__commentTitle">STYLE</h3>
                        <p class="c-modal__commentText">
                            ドライカットでの質感調整が得意です。
                            また、パーマやカラーでの似合わせも得意です。
                          </p>
                      </div>
                    </div>
                  </div>
                  <a class="c-modal__popupClose js-modal-close" href="">
                    <img src="../img/c-codal__popupClose_img@2x.png" width="54" height="54" decoding="async" alt="スタッフ詳細画面を閉じるの画像" class="c-modal__popupClose__img" />
                  </a>
                </div>
              </div>
              <!-- /modal04 -->

              <div class="c-listStaff__item fadein">
                <figure class="c-listStaff__itemInner">
                  <div class="c-listStaff__thumbWrap">
                    <img src="/img/c-listStaff_img_05@2x.jpg" width="333" height="420" decoding="async" alt="ケアリストの画像" class="c-listStaff__img" />
                    <a href="" class="js-modal-open c-listStaff__popupToggle" data-target="modal05">
                      <img src="/img/c-listStaff__popupToggle_img@2x.png" width="30" height="30" decoding="async" alt="スタッフ詳細へのリンクの画像" class="c-listStaff__popupToggle__img" />
                    </a>
                  </div>
                  <figcaption>
                    <p class="c-listStaff__jobs">carelist</p>
                    <h3 class="c-listStaff__name">真境名 せな</h3>
                  </figcaption>
                </figure>
              </div>
              <!-- modal05 -->
              <div id="modal05" class="c-modal js-modal">
                <div class="c-modal__bg js-modal-close"></div>
                <div class="c-modal__wrap">
                  <div class="c-modal__item">
                    <div class="c-modal__imgWrap">
                      <img src="/img/c-listStaff_img_05@2x.jpg" width="333" height="420" decoding="async" alt="ケアリストの画像" class="c-modal__img" />
                    </div>
                  </div>
                  <div class="c-modal__item">
                    <div class="c-modal__detailWrap">
                      <div class="c-modal__titleWrap">
                        <p class="c-modal__subTitle">carelist</p>
                        <h2 class="c-modal__title">真境名 せな</h2>
                      </div>
                      <div class="c-modal__commentWrap">
                        <h3 class="c-modal__commentTitle">MESSAGE</h3>
                        <p class="c-modal__commentText">
                            お客様からしっかりとお話を聞くことにより、
                            一人一人の髪質や骨格、ライフスタイルに合わせたスタイル提案を
                            日々心がけています。また技術に関しても常に新しいものを取り入れる
                            努力を惜しまず、お客様に様々なメニューをご提供いたします。
                          </p>
                        <h3 class="c-modal__commentTitle">STYLE</h3>
                        <p class="c-modal__commentText">
                            ドライカットでの質感調整が得意です。
                            また、パーマやカラーでの似合わせも得意です。
                          </p>
                      </div>
                    </div>
                  </div>
                  <a class="c-modal__popupClose js-modal-close" href="">
                    <img src="../img/c-codal__popupClose_img@2x.png" width="54" height="54" decoding="async" alt="スタッフ詳細画面を閉じるの画像" class="c-modal__popupClose__img" />
                  </a>
                </div>
              </div>
              <!-- /modal05 -->
              <div class="c-listStaff__item fadein">
                <figure class="c-listStaff__itemInner">
                  <div class="c-listStaff__thumbWrap">
                    <img src="/img/c-listStaff_img_06@2x.jpg" width="333" height="420" decoding="async" alt="ケアリストの画像" class="c-listStaff__img" />
                    <a href="" class="js-modal-open c-listStaff__popupToggle" data-target="modal06">
                      <img src="/img/c-listStaff__popupToggle_img@2x.png" width="30" height="30" decoding="async" alt="スタッフ詳細へのリンクの画像" class="c-listStaff__popupToggle__img" />
                    </a>
                  </div>
                  <figcaption>
                    <p class="c-listStaff__jobs">carelist</p>
                    <h3 class="c-listStaff__name">名里 一十三</h3>
                  </figcaption>
                </figure>
              </div>
              <!-- modal06 -->
              <div id="modal06" class="c-modal js-modal">
                <div class="c-modal__bg js-modal-close"></div>
                <div class="c-modal__wrap">
                  <div class="c-modal__item">
                    <div class="c-modal__imgWrap">
                      <img src="/img/c-listStaff_img_06@2x.jpg" width="333" height="420" decoding="async" alt="ケアリストの画像" class="c-modal__img" />
                    </div>
                  </div>
                  <div class="c-modal__item">
                    <div class="c-modal__detailWrap">
                      <div class="c-modal__titleWrap">
                        <p class="c-modal__subTitle">carelist</p>
                        <h2 class="c-modal__title">名里 一十三</h2>
                      </div>
                      <div class="c-modal__commentWrap">
                        <h3 class="c-modal__commentTitle">MESSAGE</h3>
                        <p class="c-modal__commentText">
                            お客様からしっかりとお話を聞くことにより、
                            一人一人の髪質や骨格、ライフスタイルに合わせたスタイル提案を
                            日々心がけています。また技術に関しても常に新しいものを取り入れる
                            努力を惜しまず、お客様に様々なメニューをご提供いたします。
                          </p>
                        <h3 class="c-modal__commentTitle">STYLE</h3>
                        <p class="c-modal__commentText">
                            ドライカットでの質感調整が得意です。
                            また、パーマやカラーでの似合わせも得意です。
                          </p>
                      </div>
                    </div>
                  </div>
                  <a class="c-modal__popupClose js-modal-close" href="">
                    <img src="../img/c-codal__popupClose_img@2x.png" width="54" height="54" decoding="async" alt="スタッフ詳細画面を閉じるの画像" class="c-modal__popupClose__img" />
                  </a>
                </div>
              </div>
              <!-- /modal06 -->
            </div>
          </div>
        </section>
        <section id="menu" class="p-home__sec-menu l-section">
          <div class="l-container">
            <h2 class="l-section__title fadein">Menu</h2>
            <div class="c-listMenu__wrap">
              <div class="c-listMenu__item fadein">
                <h3 class="c-listMenu__title">CUT</h3>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">スタイリストカット</p>
                  <p class="c-listMenu__price">¥4,400</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">トップスタイリストカット</p>
                  <p class="c-listMenu__price">¥4,750</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">アーティストカット</p>
                  <p class="c-listMenu__price">¥5,100</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">前髪カット</p>
                  <p class="c-listMenu__price">¥550-</p>
                </div>
              </div>
              <div class="c-listMenu__item fadein">
                <h3 class="c-listMenu__title">PERM</h3>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">コントロールパーマ</p>
                  <p class="c-listMenu__price">¥3,300</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">デジタルパーマ</p>
                  <p class="c-listMenu__price">¥11,500</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">プレミアムデジタルパーマ</p>
                  <p class="c-listMenu__price">¥12,500</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">メンズパーマ</p>
                  <p class="c-listMenu__price">¥6,600</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">特殊パーマ</p>
                  <p class="c-listMenu__price">¥8,800-</p>
                </div>
              </div>
              <div class="c-listMenu__item fadein">
                <h3 class="c-listMenu__title">COLOR</h3>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">リタッチ</p>
                  <p class="c-listMenu__price">¥4,400</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">スタンダード</p>
                  <p class="c-listMenu__price">S¥5,200 M/L¥6,200 LL¥7,200</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">ノンダメージカラー</p>
                  <p class="c-listMenu__price">S¥7,700 M/L¥8,800 LL¥9,900</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">オーガニックカラー</p>
                  <p class="c-listMenu__price">S¥6,200 M/L¥7,200 LL¥8,200</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">ハイブリッドカラー</p>
                  <p class="c-listMenu__price">+¥1,100</p>
                </div>
              </div>
              <div class="c-listMenu__item fadein">
                <h3 class="c-listMenu__title">OTHER</h3>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">縮毛矯正</p>
                  <p class="c-listMenu__price">¥12,500</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">トリートメント</p>
                  <p class="c-listMenu__price">¥7,800</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">ヘッドスパ</p>
                  <p class="c-listMenu__price">¥6,600</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">シャンプー・ブローのみ</p>
                  <p class="c-listMenu__price">¥2,750</p>
                </div>
                <div class="c-listMenu__detail">
                  <p class="c-listMenu__menu">セット</p>
                  <p class="c-listMenu__price">¥4,500</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="access" class="p-home__sec-access l-section">
          <div class="p-home__sec-access__mapWrap fadein">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.894537016285!2d139.6935905761686!3d35.657568045025684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188caa6f1fbe4d%3A0xe752aa93ba9e166a!2z44CSMTUwLTAwNDQ!5e0!3m2!1sja!2sjp!4v1617090741730!5m2!1sja!2sjp" width="100%" height="auto" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="l-container fadein">
            <h2 class="l-section__title">Access</h2>
            <div class="c-listAccess__wrap">
              <div class="c-listAccess__detailInner">
                <table class="c-listAccess__detailTable">
                  <tbody>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">NAME</th>
                      <td class="c-listAccess__detailTd">NiNe.</td>
                    </tr>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">ADDRESS</th>
                      <td class="c-listAccess__detailTd">
                        〒150-0044 東京都渋谷区円山町23-19-011
                      </td>
                    </tr>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">TEL</th>
                      <td class="c-listAccess__detailTd">03-6877-1223</td>
                    </tr>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">E-mail</th>
                      <td class="c-listAccess__detailTd">nine@nine.co.jp</td>
                    </tr>
                  </tbody>
                </table>
                <table class="c-listAccess__detailTable">
                  <tbody>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">OPEN</th>
                      <td class="c-listAccess__detailTd">
                        火曜(Tue.)-日曜(Sun.)11:00-20:00
                      </td>
                    </tr>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">L.O</th>
                      <td class="c-listAccess__detailTd">
                        カット 19:00 / パーマ・カラー 18:00
                      </td>
                    </tr>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">OFF</th>
                      <td class="c-listAccess__detailTd">
                        毎週月曜日（※月曜日が祝日の場合は火曜日休み）
                      </td>
                    </tr>
                    <tr class="c-listAccess__detailRow">
                      <th class="c-listAccess__detailTh">CARD</th>
                      <td class="c-listAccess__detailTd">
                        VISA／MasterCard／JCB / American Express／Diners
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
        <section class="p-home__sec-instagram l-section">
          <div class="l-container">
            <h2 class="l-section__title fadein">Instagram</h2>
            <div class="c-listInstagram__wrap fadein">
              <div class="c-listInstagram__imgWrap">
                <?php
                  $instagram = null;
                  $instagram_business_id = '17841445733671606'; // InstagramビジネスアカウントのID
                  $access_token = 'EAA8IrJ8SwnQBAFEQzjDoo8H09j3UxgeZC1M7VRDQblcNup27fvIwfAEADihu2sUHDS7OyTkblcb6XSB8DfBSSC2jOZAy1amponnPsmLXXsEF8Esrrg4yKNsZBOVL5kqlNxqM0lyE7H68Erj2kZByuactixBtV9dkHivo3ZCz2YwZDZD'; // 有効期限無期限のアクセストークン
                  $post_count = 8;
                  $query = 'name,media.limit(' . $post_count. '){caption,like_count,media_url,permalink,timestamp,username,comments_count}';
                  $get_url = 'https://graph.facebook.com/v7.0/' . $instagram_business_id . '?fields=' . $query . '&access_token=' . $access_token;
                  $curl = curl_init();
                  curl_setopt($curl, CURLOPT_URL, $get_url);
                  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($curl);
                  curl_close($curl);
                  if($response){
                    $instagram = json_decode($response);
                    if(isset($instagram->error)){
                      $instagram = null;
                    }
                  }
                  ?>
                <?php
                  foreach($instagram->media->data as $post): $caption = $post->caption; $caption =
                    preg_replace('/\n/', '<br />', $caption); ?>
                <div class="c-listInstagram__item">
                  <a href="<?php echo $post->permalink; ?>" target="_blank" rel="noopener noreferrer">
                    <span class="thumbnail">
                      <img class="c-listInstagram__img" src="<?php if($post->media_type=='VIDEO'){ echo $post->thumbnail_url; } else { echo $post->media_url; } ?>" alt="<?php echo $caption; ?>" />
                    </span>
                  </a>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>
      </article>
    </main>
    <!-- /main -->
    <!-- footer -->
    <footer class="l-footer">
      <a href="#top" class="c-page__top">
        <div class="c-page__topWrap">
          <div class="c-page__topInner">
            <i class="fas fa-chevron-up"></i>
            <p class="c-page__topText">TOP</p>
          </div>
        </div>
      </a>
      <div class="l-footer__inner l-container">
        <div class="l-footer__itemWrap">
          <div class="l-footer__socialInner">
            <h3 class="l-footer__socialTitle">Follow Us</h3>
            <div class="l-footer__socialWrap">
              <a href="#" class="l-footer__socialLink">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="l-footer__socialLink">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="l-footer__socialLink">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
          <div class="l-footer__navWrap">
            <nav class="l-footer__nav">
              <ul class="l-footer__navList">
                <li class="l-footer__navItem">
                  <a href="#" class="l-footer__navLink">Home</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="#" class="l-footer__navLink">Concept</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="#" class="l-footer__navLink">Staff</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="#" class="l-footer__navLink">Menu</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="#" class="l-footer__navLink">Access</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="l-footer__itemWrap">
          <a href="#" class="l-footer__company">NiNe.</a>
          <small class="l-footer__copy">© Copyright 2021 NiNe. All rights reserved.</small>
        </div>
      </div>
    </footer>
    <!-- /footer -->
    <script src="js/script.js"></script>
  </div>
</body>
</html>