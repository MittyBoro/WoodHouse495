<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>@yield('meta_title', 'WoodHouse495')</title>

  <meta name="description" content="@yield('meta_description', '')">
  <meta name="keywords" content="@yield('meta_keywords', '')" />

  <meta property="og:title" content="@yield('meta_title', '')">
  <meta property="og:description" content="@yield('meta_description', '')">
  <meta property="og:type" content="@yield('meta_type', 'website')">
  @hasSection('meta_image')
    <meta property="og:image" content="@yield('meta_image')" />
  @endif

  <meta name="yandex-tableau-widget"
    content="logo={{ Vite::image('favicon.svg') }}, color=#ffffff">
  <link rel="icon" type="image/x-icon"
    href="{{ Vite::image('favicon.svg') }}">
  <link rel="apple-touch-icon" sizes="152x152"
    href="{{ Vite::image('favicon.svg') }}">
  <link rel="apple-touch-icon-precomposed" sizes="152x152"
    href="{{ Vite::image('favicon.svg') }}">

  @vite('resources/frontend/sass/style.scss')
  @vite('resources/frontend/js/app.js')

  @yield('head_end_code')
  {!! $props['head_end_code'] ?? '' !!}

  <style>
    .preload-box {
      position: fixed !important;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      background: #F7FAFD;
      z-index: 999;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      font-family: "Montserrat", sans-serif;
    }

    .preload-box .wood-logo {
      font-size: 30px;
      font-weight: 600;
      text-transform: uppercase;
      color: inherit;
      text-decoration: none;
    }

    .preload-box .wood-logo .green {
      color: #74BD68;
    }

    .preload-box .loading-circle {
      flex-shrink: 0;
      margin: 40px 0;
      width: 50px;
      height: 50px;
      border: 5px solid transparent;
      border-left-color: #f2a250;
      border-right-color: #74BD68;
      animation: round 1s infinite linear;
      border-radius: 50%;
    }

    .preload-box .loading-text {
      margin-top: -3px;
      color: #333;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      font-size: 18px;
    }
  </style>

</head>

<body class="preload page-{{ $viewName }} @yield('body_class')">
  @auth
    @includeWhen(Auth::user()->is_editor, 'elements.paneline')
  @endauth

  <div class="preload-box">
    <a class="wood-logo" href="/">
      <span class="green">wood</span>house495
    </a>
    <div class="loading-circle"></div>
    <div class="loading-text">Загрузка...</div>
  </div>

  <div class="wrapper">

    <!-- 0_header -->
    <div class="header-box">
      <div class="container">
        <div class="top-row">
          <div class="logo-col">
            <a class="wood-logo" href="/">
              <span class="green">Wood</span>House495
            </a>
          </div>
          <div class="sublogo-col gray visible-xl">Строительно-отделочные работы
            деревянных домов
          </div>
          <div class="icons icons-orange">
            <a class="icon" target="_blank"
              href="https://www.instagram.com/woodhouse495/">
              <img loading="lazy" src="{{ Vite::image('icons/instagram.svg') }}"
                alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://www.youtube.com/channel/UCY3DgGd_4AmYLk39tM2XsLg">
              <img loading="lazy" src="{{ Vite::image('icons/youtube.svg') }}"
                alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://vk.com/woodhouse495">
              <img loading="lazy" src="{{ Vite::image('icons/vk.svg') }}"
                alt="">
            </a>
            <a class="icon" target="_blank" href="https://wa.me/79251918160">
              <img loading="lazy" src="{{ Vite::image('icons/whatsapp.svg') }}"
                alt="">
            </a>
          </div>
          <div class="contacts-col">
            <a class="phone-row"
              onclick="ym(93599554,'reachGoal','tel-clic'); return true;"
              href="tel:+79169168078">+7 (916) 916-80-78</a>
            <a class="mail-row"
              href="mailto:info@woodhouse495.ru">info@woodhouse495.ru</a>
          </div>
          <div class="btn-col">
            <div class="icons icons-orange icons-callback">
              <div class="icon" data-popup=".popup-callback"><img
                  loading="lazy" src="{{ Vite::image('icons/phone.svg') }}"
                  alt=""></div>
            </div>
            <div class="btn btn-green" data-popup=".popup-callback"
              onclick="ym(93599554,'reachGoal','otkr-forma');">Заказать
              звонок</div>
          </div>
          <div class="hamburger-col hidden-lg" data-popup=".popup-menu">
            <img src="{{ Vite::image('icons/hamburger.svg') }}" alt="">
          </div>
        </div>
        <div class="menu-row">
          <a class="menu-item" href="/">
            <img loading="lazy" src="{{ Vite::image('icons/menu-house.svg') }}"
              alt="">
            <span>Главная</span>
          </a>
          <div class="menu-item menu-dropdown">
            <span class="mid-name a">
              услуги
              <img class="to-svg mid-arrow"
                src="{{ Vite::image('icons/menu-arrow.svg') }}"
                alt="">
            </span>
            <div class="mid-list">
              <a class="mid-item" href="/sanding">Шлифовка деревянного
                дома</a>
              <a class="mid-item" href="/painting">Покраска деревянного
                дома</a>
              <a class="mid-item" href="/okosyachka">Окосячка деревянного
                дома</a>
              <a class="mid-item" href="/roofing">Кровельные работы</a>
              <a class="mid-item" href="/reconstruction">Реконструкция
                домов</a>
              <a class="mid-item" href="/outbuildings">Строительство
                пристроек</a>
              <a class="mid-item" href="/planken">Отделка дома
                планкеном</a>
            </div>
          </div>

          @yield('menu_items')

          <a class="menu-item" href="#contacts">Контакты</a>
        </div>
      </div>
    </div>

    @yield('content')

    <!-- 14_contacts -->
    <div class="contacts-box" id="contacts">
      <div class="container">
        <div class="title-row">
          <div class="h2"><b>Наши</b> контакты</div>
        </div>
        <div class="contacts-list">
          <div class="contacts-item">
            <div class="icons icons-green">
              <span class="icon"><img loading="lazy"
                  src="{{ Vite::image('icons/mail.svg') }}"
                  alt=""></span>
            </div>
            <div class="ci-title">E-mail:</div>
            <div class="ci-text"><a
                href="mailto:info@woodhouse495.ru">info@woodhouse495.ru</a>
            </div>
          </div>
          <div class="contacts-item">
            <div class="icons icons-green">
              <span class="icon"><img loading="lazy"
                  src="{{ Vite::image('icons/clock.svg') }}"
                  alt=""></span>
            </div>
            <div class="ci-title">Время работы:</div>
            <div class="ci-text">работаем<br>
              с 8:00 до 22:00</div>
          </div>
          <div class="contacts-item">
            <div class="icons icons-green">
              <span class="icon"><img loading="lazy"
                  src="{{ Vite::image('icons/phone.svg') }}"
                  alt=""></span>
            </div>
            <div class="ci-title">Наш телефон:</div>
            <div class="ci-text">
              <a class="a-phone"
                onclick="ym(93599554,'reachGoal','tel-clic'); return true;"
                href="tel:+79169168078">+7 (916) 916-80-78</a>
            </div>
          </div>
          <div class="contacts-item">
            <div class="icons icons-green">
              <span class="icon"><img loading="lazy"
                  src="{{ Vite::image('icons/map.svg') }}"
                  alt=""></span>
            </div>
            <div class="ci-title">Адрес:</div>
            <div class="ci-text">г.Москва, бульвар Дмитрия Донского 1</div>
          </div>
          <div class="contacts-item">
            <div class="icons icons-green">
              <span class="icon"><img loading="lazy"
                  src="{{ Vite::image('icons/business.svg') }}"
                  alt=""></span>
            </div>
            <div class="ci-title">Реквизиты:</div>
            <div class="ci-text">ОГРН 1217700543642<br>
              ИНН 9704099546</div>
          </div>
        </div>
      </div>
    </div>

    <!-- 15_footer -->
    <div class="footer-box">
      <div class="container grid-lg-3 grid-xl-4">
        <div class="logo-col">
          <a class="wood-logo" href="/">
            <span class="green">wood</span>house495
          </a>
          <div class="sublogo-col gray">Профессиональная отделка деревянных
            домов под ключ
            в Москве и Московской области</div>
        </div>

        <ul class="menu-col visible-xl">
          <a class="menu-item" href="/">Главная</a>
          @yield('menu_items')
          <a class="menu-item" href="/articles">Полезные статьи</a>
          <a class="menu-item" href="#contacts">Контакты</a>
        </ul>

        <div class="contacts-col">
          <div class="icons icons-orange">
            <a class="icon" target="_blank"
              href="https://www.instagram.com/woodhouse495/">
              <img loading="lazy"
                src="{{ Vite::image('icons/instagram.svg') }}"
                alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://www.youtube.com/channel/UCY3DgGd_4AmYLk39tM2XsLg">
              <img loading="lazy"
                src="{{ Vite::image('icons/youtube.svg') }}" alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://vk.com/woodhouse495">
              <img loading="lazy" src="{{ Vite::image('icons/vk.svg') }}"
                alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://wa.me/79251918160">
              <img loading="lazy"
                src="{{ Vite::image('icons/whatsapp.svg') }}" alt="">
            </a>
          </div>
          <a class="phone-row"
            onclick="ym(93599554,'reachGoal','tel-clic'); return true;"
            href="tel:+79169168078">+7 (916) 916-80-78</a>
          <a class="mail-row"
            href="mailto:info@woodhouse495.ru">info@woodhouse495.ru</a>
          <div class="btn btn-green" data-popup=".popup-callback"
            onclick="ym(93599554,'reachGoal','otkr-forma');">Заказать
            звонок</div>
        </div>
        <div class="copy-col">
          <a class="link" href="/offer">Договор оферты</a>
          <a class="link" href="/privacy">Политика конфиденциальности</a>
          <div class="copy-info">© 2008 — {{ date('Y') }} «WOODHOUSE495»
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- popup -->
  <div class="popup-boxes">
    <div class="popup popup-callback popup-form">
      <div class="container">
        <form class="form form-wrapper">
          <input type="hidden" name="form_name"
            value="Бесплатный обратный звонок (popup)">
          <div class="close-popup close-btn"></div>
          <div class="title-row">
            <div class="h3"><b>Закажите бесплатный обратный звонок</b>
            </div>
            <div class="sub-h">Заполните форму и мы перезвоним Вам в течение
              30 мин</div>
          </div>
          <div class="form-input">
            <input type="text" name="name" autocomplete="name"
              placeholder="Введите Ваше имя">
          </div>
          <div class="form-input">
            <input type="text" name="phone" autocomplete="phone"
              placeholder="+7 (___) ___ - __ - __" phone required>
          </div>
          <button class="btn btn-orange"><span>заказать бесплатный
              обратный звонок</span></button>
          <div class="form-policy">Нажимая на кнопку, вы даёте согласие
            на обработку персональных данных</div>
        </form>
      </div>
    </div>

    <div class="popup popup-calculation popup-form">
      <div class="container">
        <form class="form form-wrapper">
          <input type="hidden" name="form_name" value="Рассчёт стоимости">
          <div class="close-popup close-btn"></div>
          <div class="title-row">
            <div class="h3"><b>Закажите рассчёт стоимости</b></div>
            <div class="sub-h">Заполните форму и мы перезвоним Вам в ближайшее
              время</div>
          </div>
          <div class="form-input">
            <input type="text" name="name" autocomplete="name"
              placeholder="Введите Ваше имя">
          </div>
          <div class="form-input">
            <input type="text" name="phone" autocomplete="phone"
              placeholder="+7 (___) ___ - __ - __" phone required>
          </div>
          <button class="btn btn-orange"><span>заказать бесплатный
              рассчёт стоимости</span></button>
          <div class="form-policy">Нажимая на кнопку, вы даёте согласие
            на обработку персональных данных</div>
        </form>
      </div>
    </div>

    <div class="popup popup-consultation popup-form">
      <div class="container">
        <form class="form form-wrapper">
          <input type="hidden" name="form_name"
            value="Бесплатная консультация (popup)">
          <div class="close-popup close-btn"></div>
          <div class="title-row">
            <div class="h3"><b>Закажите бесплатную консультацию</b></div>
            <div class="sub-h">Заполните форму и мы перезвоним Вам в течение
              30 мин</div>
          </div>
          <div class="form-input">
            <input type="text" name="name" autocomplete="name"
              placeholder="Введите Ваше имя">
          </div>
          <div class="form-input">
            <input type="text" name="phone" autocomplete="phone"
              placeholder="+7 (___) ___ - __ - __" phone required>
          </div>
          <button class="btn btn-orange"><span>заказать бесплатную
              консультацию</span></button>
          <div class="form-policy">Нажимая на кнопку, вы даёте согласие
            на обработку персональных данных</div>
        </form>
      </div>
    </div>

    <div class="popup popup-measurer popup-form">
      <div class="container">
        <form class="form form-wrapper">
          <input type="hidden" name="form_name"
            value="Бесплатный вызов мастера (popup)">
          <div class="close-popup close-btn"></div>
          <div class="title-row">
            <div class="h3"><b>Закажите бесплатный вызов мастера</b></div>
            <div class="sub-h">Заполните форму и мы перезвоним Вам в течение
              30 мин</div>
          </div>
          <div class="form-input">
            <input type="text" name="name" autocomplete="name"
              placeholder="Введите Ваше имя">
          </div>
          <div class="form-input">
            <input type="text" name="phone" autocomplete="phone"
              placeholder="+7 (___) ___ - __ - __" phone required>
          </div>
          <button class="btn btn-orange"><span>Заказать бесплатный
              выезд мастера</span></button>
          <div class="form-policy">Нажимая на кнопку, вы даёте согласие
            на обработку персональных данных</div>
        </form>
      </div>
    </div>

    <div class="popup popup-success popup-form">
      <div class="container">
        <div class="form-wrapper">
          <div class="close-popup close-btn"></div>
          <div class="title-row">
            <img class="success-img" loading="lazy"
              src="{{ Vite::image('icons/big-success.svg') }}"
              alt="">
            <div class="h3"><b>Ваша заявка успешно отправлена!</b></div>
            <div class="sub-h">Наш менеджер свяжется с Вами в течение 30
              минут.</div>
          </div>
          <div class="btn btn-orange close-popup"><span>Вернуться на
              сайт</span></div>
        </div>
      </div>
    </div>

    <div class="popup popup-project">
      <div class="container">
        <div class="form-wrapper project-container">
          <img class="visible-lg absolute pupup-green-1" loading="lazy"
            src="{{ Vite::image('general/hanging/pupup_green_1.png') }}"
            alt="">
          <img class="visible-lg absolute pupup-green-2" loading="lazy"
            src="{{ Vite::image('general/hanging/pupup_green_2.png') }}"
            alt="">
          <img class="visible-lg absolute home-shaving" loading="lazy"
            src="{{ Vite::image('general/hanging/home_shaving.png') }}"
            alt="">

          <div class="close-popup close-btn"></div>

          <div class="left-col">
            <div class="full-row">
              <div class="swiper">
                <div class="swiper-wrapper lightgallery pl-top-gallery">
                  <div class="swiper-slide">
                  </div>
                </div>
              </div>
              <div class="sw-arrow sw-prev"></div>
              <div class="sw-arrow sw-next"></div>
            </div>
            <div class="thumbs-row">
              <div class="swiper">
                <div class="swiper-wrapper pl-thumbs-gallery">
                  <div class="swiper-slide">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="right-col">
            <div class="pr-title"></div>
            <div class="pr-place"></div>
            <div class="pr-description"></div>
            <button class="btn btn-orange"
              data-popup=".popup-consultation"><span>Получить
                бесплатную консультацию специалиста</span></button>
          </div>
        </div>
      </div>
    </div>

    <div class="popup popup-menu">
      <div class="container">
        <div class="top-row">
          <div class="left-side">
            <div class="logo-col">
              <a class="wood-logo" href="/">woodhouse495</a>
            </div>
            <div class="sublogo-col">Строительно-отделочные работы деревянных
              домов</div>
          </div>
          <div class="right-side">
            <div class="close-popup close-btn"></div>
          </div>
        </div>

        <div class="menu-row">
          <a class="menu-item menu-home" href="/">
            <img loading="lazy"
              src="{{ Vite::image('icons/menu-house.svg') }}" alt="">
            <span>Главная</span>
          </a>
          <div class="menu-item menu-dropdown">
            <div class="mid-name a">
              услуги
              <img class="mid-arrow" loading="lazy"
                src="{{ Vite::image('icons/menu-arrow.svg') }}"
                alt="">
            </div>
            <div class="mid-list">
              <a class="mid-item" href="/sanding">Шлифовка деревянного
                дома</a>
              <a class="mid-item" href="/painting">Покраска деревянного
                дома</a>
              <a class="mid-item" href="/okosyachka">Окосячка деревянного
                дома</a>
              <a class="mid-item" href="/roofing">Кровельные работы</a>
              <a class="mid-item" href="/reconstruction">Реконструкция
                домов</a>
              <a class="mid-item" href="/outbuildings">Строительство
                пристроек</a>
              <a class="mid-item" href="/planken">Отделка дома
                планкеном</a>
            </div>
          </div>
          @yield('menu_items')
          <a class="menu-item" href="/articles">Полезные статьи</a>
          <a class="menu-item" href="#contacts">Контакты</a>
        </div>

        <div class="contacts-col">
          <a class="phone-row"
            onclick="ym(93599554,'reachGoal','tel-clic'); return true;"
            href="tel:+79169168078">+7 (916) 916-80-78</a>
          <a class="mail-row"
            href="mailto:info@woodhouse495.ru">info@woodhouse495.ru</a>
          <div class="btn btn-orange" data-popup=".popup-callback"
            onclick="ym(93599554,'reachGoal','otkr-forma');">
            <span>Заказать звонок</span>
          </div>
        </div>

        <div class="icons-row">
          <div class="icons icons-white">
            <a class="icon" target="_blank"
              href="https://www.instagram.com/woodhouse495/">
              <img class="to-svg" loading="lazy"
                src="{{ Vite::image('icons/instagram.svg') }}"
                alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://www.youtube.com/channel/UCY3DgGd_4AmYLk39tM2XsLg">
              <img class="to-svg" loading="lazy"
                src="{{ Vite::image('icons/youtube.svg') }}" alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://vk.com/woodhouse495">
              <img class="to-svg" loading="lazy"
                src="{{ Vite::image('icons/vk.svg') }}" alt="">
            </a>
            <a class="icon" target="_blank"
              href="https://wa.me/79251918160">
              <img class="to-svg" loading="lazy"
                src="{{ Vite::image('icons/whatsapp.svg') }}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="popup popup-video">
      <div class="container">
        <div class="form-wrapper">
          <div class="close-popup close-btn"></div>
          <div class="iframe-wrap">
            <iframe
              data-src="https://www.youtube.com/embed/j5bFvLdDMHc?enablejsapi=1"
              width="100%" height="100%" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              autoplay allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>

  @yield('body_end_code')
  {!! $props['body_end_code'] ?? '' !!}
</body>

</html>

