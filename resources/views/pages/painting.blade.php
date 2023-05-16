@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('menu_items')
  <a class="menu-item" href="#portfolio">Примеры работ</a>
  <a class="menu-item" href="#process">Этапы работы</a>
  <a class="menu-item" href="#price">Прайс</a>
  <a class="menu-item" href="#about">Преимущества</a>
@endsection

@section('content')

  <!-- 1_home -->
  <div class="home-box painting-home-box">
    <div class="container grid-with-form grid grid-md-12">
      <div class="visible-md rellax absolute left-shaving-alt"
        data-rellax-speed="1">
        <img loading="lazy"
          src="{{ Vite::image('general/hanging/home_shaving.png') }}"
          alt="">
      </div>
      <img class="hidden-md rellax absolute mobile-shaving" data-rellax-speed="-2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/home_shaving_mobile.png') }}"
        alt="">

      <div class="left-col">
        <div class="h1"><b>Покраска деревянных домов</b> в Москве и МО</div>
        <div class="sub-h sub-h-alt">
          Специалисты-плотники с опытом работ более 15 лет профессионально
          покрасят ваш дом лучшими маслами, которые есть на рынке. Мы знаем плюсы
          и минусы каждого производителя от Тиккурилы до Осмо и других
          премиум-компаний. Сделаем все на высшем уровне и максимально
          качественно.
        </div>
      </div>
      <div class="right-col">
        <form class="form form-wrapper">
          <input type="hidden" name="form_name"
            value="Покраска домов: Заказ мастера">
          <div class="title-row">
            <div class="h3"><b>Закажите бесплатный вызов мастера</b></div>
            <div class="sub-h">Заполните форму и мы перезвоним Вам в течение 30
              мин</div>
          </div>
          <div class="form-input visible-lg">
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
      <div class="down-circle-row down-circle-center col-full">
        <div class="down-circle down-circle-alt"></div>
      </div>
    </div>
  </div>

  <!-- 18_painting -->
  <div class="painting-box">
    <div class="container grid-lg-12">
      <img class="visible-md rellax absolute partners-green-1"
        data-rellax-speed="1" loading="lazy"
        src="{{ Vite::image('general/hanging/partners_alt_green_1.png') }}"
        alt="">
      <img class="visible-md rellax absolute partners-green-2"
        data-rellax-speed="2" loading="lazy"
        src="{{ Vite::image('general/hanging/partners_alt_green_2.png') }}"
        alt="">
      <div class="left-side">
        <div class="h2"><b>Профессиональный подбор</b> красок</div>
        <div class="sub-h text-to-hide text-to-hide-alt">
          <p>После каждого принятого звонка от клиента мы тщательно готовимся к
            каждому выезду. У нас всегда с собой в наличии несколько сотен
            пробников разных красок и масел. Мы готовы показать вам любой цвет
            именно на вашей древесине, чтобы потом не получилось неприятных
            сюрпризов, что в шоуруме вы увидели одно, а у вас получилось
            совершенно другое.</p>
          <p>Мы только за, когда вы просите у нас зашлифовать одно-два бревна и
            покрасить в выбранный Вами цвет. Во время нашего первого знакомства мы
            расскажем все плюсы и минусы каждого производителя, не скрывая
            ничего.<br>
            Подберем краску на любой бюджет даже для самого тяжелого случая прямо
            у вас на объекте! Звоните, а остальные проблемы мы решим сами.</p>
        </div>
        <div class="read-more link hidden-md">
          <img class="to-svg" src="{{ Vite::image('icons/menu-arrow.svg') }}"
            alt="">
        </div>
      </div>
      <div class="right-side grid-md-2">
        <div class="video-wrap img-cover-wrap">
          <img src="{{ Vite::image('tmp/paints/1.png') }}" alt="">
          <video loading="lazy" poster="{{ Vite::image('tmp/paints/1.png') }}"
            src="{{ Vite::asset('resources/frontend/videos/2_1.mp4') }}" autoplay
            muted playsinline loop></video>
        </div>
        <div class="video-wrap img-cover-wrap">
          <img src="{{ Vite::image('tmp/paints/2.png') }}" alt="">
          <video loading="lazy" poster="{{ Vite::image('tmp/paints/2.png') }}"
            src="{{ Vite::asset('resources/frontend/videos/2_2.mp4') }}" autoplay
            muted playsinline loop></video>
        </div>
      </div>
    </div>
  </div>

  <!-- 11_portfolio -->
  <div
    class="portfolio-box alt-portfolio-box sanding-portfolio-box painting-portfolio-box"
    id="portfolio">
    <div class="container">
      <div class="title-row">
        <div class="h2"><b>Примеры</b> работ</div>
      </div>
      <div class="portfolio-list flex-list">
        @foreach ($page->portfolios as $portfolio)
          @include('elements.portfolio')
        @endforeach
      </div>
      <div class="portfolio-bottom">
        <div class="pb-info gray">Больше реализованных проектов смотрите в нашем
          Instagram</div>
        <a class="btn btn-orange btn-instagram" target="_blank"
          href="https://www.instagram.com/woodhouse495/">
          <span>
            <img loading="lazy"
              src="{{ Vite::image('icons/instagram-btn.svg') }}" alt="">
            Подписывайтесь на нас
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- 9_process -->
  <div class="process-box sanding-process-box painting-process-box"
    id="process">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute process-green" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/process_green.png') }}"
          alt="">
        <img class="rellax absolute process-sliver" data-rellax-speed="1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/process_sliver.png') }}"
          alt="">
      </div>
      <div class="title-row">
        <div class="h2"><b>Как мы</b> работаем</div>
      </div>
      <div class="process-list">
        <div class="hidden"></div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">01</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/1.png') }}" alt="">
          </div>
          <div class="pi-title">Оставляете заявку</div>
          <div class="pi-description">После заявки наш менеджер перезвонит Вам в
            течение 30 минут для обсуждения деталей</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">02</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/2.png') }}" alt="">
          </div>
          <div class="pi-title">Выезд замерщика</div>
          <div class="pi-description">Наш специалист бесплатно выезжает на объект
            для составления замеров и объема работ</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">03</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/3_alt.png') }}"
              alt="">
          </div>
          <div class="pi-title">Подбор краски (масла)</div>
          <div class="pi-description">Покажем каждую краску в наличии, подберем
            лучший цвет на вашей древесине и просчитаем точную стоимость от
            производителя без посредников</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">04</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/3.png') }}" alt="">
          </div>
          <div class="pi-title">Составляем смету</div>
          <div class="pi-description">После замеров
            мы составляем подробную смету. Цена не изменится после начала работ
          </div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">05</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/4.png') }}" alt="">
          </div>
          <div class="pi-title">Выполняем работу
          </div>
          <div class="pi-description">Наши специалисты приезжают и начинают
            работу над Вашей задачей
            в назначенный срок</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">06</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/5.png') }}" alt="">
          </div>
          <div class="pi-title">Сдаём объект</div>
          <div class="pi-description">После окончания всех работ мы убираем за
            собой мусор и сдаем Вам готовый объект</div>
        </div>
      </div>
      <div class="process-btn">
        <div class="btn btn-orange" data-popup=".popup-measurer">
          <span>Бесплатно вызвать замерщика</span>
        </div>
      </div>
    </div>
  </div>

  <!-- 8_partners -->
  <div class="partners-box painting-partners-box">
    <div class="hidden-md">
      <img class="rellax absolute partners-green-left" data-rellax-speed="4"
        loading="lazy"
        src="{{ Vite::image('general/hanging/partners_green_left_mobile.png') }}"
        alt="">
      <img class="rellax absolute partners-green-right" data-rellax-speed="3"
        loading="lazy"
        src="{{ Vite::image('general/hanging/partners_green_right_mobile.png') }}"
        alt="">
    </div>

    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute partners-green-1" data-rellax-speed="1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/partners_alt_green_1.png') }}"
          alt="">
        <img class="rellax absolute partners-green-2" data-rellax-speed="2"
          loading="lazy"
          src="{{ Vite::image('general/hanging/partners_alt_green_2.png') }}"
          alt="">
      </div>

      <div class="title-row">
        <div class="h2">
          <b>Мы работаем <span class="visible-md">только</span></b>
          с проверенными производителями
        </div>
        <div class="sub-h">Выбираем в первую очередь качество, проверенное
          годами</div>
      </div>
      <div class="partners-image visible-md">
        <img loading="lazy" src="{{ Vite::image('tmp/partners/sanding.png') }}"
          alt="Производители">
      </div>
      <div class="partners-image hidden-md">
        <img loading="lazy"
          src="{{ Vite::image('tmp/partners/sanding_mobile.png') }}"
          alt="Производители">
      </div>
    </div>
  </div>

  <!-- 16_price -->
  <div class="price-box painting-price-box" id="price">
    <div class="container">

      <div class="price-discount visible-xxl">
        <img class="back-green" loading="lazy"
          src="{{ Vite::image('backgrounds/price_discount.png') }}"
          alt="">
        <p>Скидки при больших объемах работ <b>от 5% до 10%</b></p>
      </div>

      <div class="title-row">
        <div class="h2"><b>Актуальный прайс<br> по покраске</b> деревянных
          домов</div>
      </div>
      <div class="price-table">
        {!! $page['description'] !!}
      </div>
    </div>
  </div>

  <!-- 17_cost -->
  <div class="cost-box painting-cost-box">
    <img class="hidden-md rellax absolute cost-green-left-mobile"
      data-rellax-speed="-1" loading="lazy"
      src="{{ Vite::image('general/hanging/cost_green_left_mobile.png') }}"
      alt="">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute cost-green-left" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/cost_green_left.png') }}"
          alt="">
        <img class="rellax absolute cost-green-right" data-rellax-speed="-2"
          loading="lazy"
          src="{{ Vite::image('general/hanging/cost_green_right.png') }}"
          alt="">
        <img class="rellax absolute cost-device" data-rellax-speed="1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/cost_device_2.png') }}"
          alt="">
      </div>

      <div class="title-row">
        <div class="h2"><b>Рассчитайте стоимость</b> покраски дома</div>
        <div class="sub-h">Все, что Вам нужно — заполнить форму ниже и мы вышлем
          предварительную смету по Вашей задаче</div>
      </div>

      <form class="form-calc cost-form form-grid">
        <input type="hidden" name="Рассчёт" value="Покраски дома">
        <div class="left-side form-grid">
          <div class="form-input-wrap">
            <div class="form-input-title">Площадь стен (м²)</div>
            <div class="form-input form-input-alt form-input-alt-with-buttons">
              <div class="form-minus"
                onclick="this.nextElementSibling.stepDown()"></div>
              <input type="number" min="1" name="Площадь стен м²"
                value="100" required>
              <div class="form-plus"
                onclick="this.previousElementSibling.stepUp()"></div>
            </div>
          </div>
          <div class="form-input-wrap">
            <div class="form-input-title">Подбор материала</div>
            <div class="form-input form-input-alt form-options">
              <input type="text" name="Подбор материала" readonly required>
              <img class="to-svg icon"
                src="{{ Vite::image('icons/menu-arrow.svg') }}" alt="">
              <div class="options-list">
                <div class="options-value">Да</div>
                <div class="options-value">Нет</div>
              </div>
            </div>
          </div>
          <div class="form-input-wrap">
            <div class="form-input-title">Производитель ЛКМ</div>
            <div class="form-input form-input-alt form-options">
              <input type="text" name="Производитель ЛКМ" readonly required>
              <img class="to-svg icon"
                src="{{ Vite::image('icons/menu-arrow.svg') }}" alt="">
              <div class="options-list">
                <div class="options-value">Saicos</div>
                <div class="options-value">Renner</div>
                <div class="options-value">G-nature</div>
                <div class="options-value">Biofa</div>
                <div class="options-value">Osmo</div>
                <div class="options-value">Tikkurila</div>
                <div class="options-value">Другое</div>
              </div>
            </div>
          </div>
        </div>

        <div class="right-side form-grid">
          <div class="form-input-wrap">
            <div class="form-input-title">Грунтовка</div>
            <div class="form-input form-input-alt form-options">
              <input type="text" name="Грунтовка" readonly required>
              <img class="to-svg icon"
                src="{{ Vite::image('icons/menu-arrow.svg') }}" alt="">
              <div class="options-list">
                <div class="options-value">Да</div>
                <div class="options-value">Нет</div>
                <div class="options-value">Требуется консультация</div>
              </div>
            </div>
          </div>
          <div class="form-input-wrap">
            <div class="form-input-title">Антисептирование</div>
            <div class="form-input form-input-alt form-options">
              <input type="text" name="Антисептирование" readonly required>
              <img class="to-svg icon"
                src="{{ Vite::image('icons/menu-arrow.svg') }}" alt="">
              <div class="options-list">
                <div class="options-value">Да</div>
                <div class="options-value">Нет</div>
                <div class="options-value">Требуется консультация</div>
              </div>
            </div>
          </div>
          <div class="btn-col">
            <button class="btn btn-orange"><span>рассчитать
                стоимость</span></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- 2_about -->
  <div class="about-box alt-about painting-about-box" id="about">
    <img class="hidden-md rellax absolute right-green" data-rellax-speed="1"
      loading="lazy"
      src="{{ Vite::image('general/hanging/about_green_mobile.png') }}"
      alt="">
    <div class="container grid-2">
      <div class="left-col">
        <div class="h2"><b>Превратим избушку</b> в дворец!</div>
        <div class="sub-h">
          Мы никогда не говорим своим клиентам "НЕТ"! Мы готовы взяться за любой
          объект и довести его от начала до конца. Придерживаемся одного простого
          правила "Клиент всегда прав, но иногда он слишком много читает
          Интернета". А если это не объяснить с научной точки зрения то получается
          не совсем профессионально.
        </div>
        <div class="text-item format-text text-to-hide text-to-hide-alt">
          <p>Наша компания работает с 2003 года по покраске деревянных домов.
            Создание экологически чистой атмосферы в вашем доме - наше главное
            задание. Мы знаем, чем покрасить дом, чтобы это не вредило вашим
            детям. Мы проверили на себе тысячи производителей красок и масел и
            знаем, чем можно покрывать дерево в бане, чтобы это не был столб химии
            и пыли.<br>
            Если вы не знаете каким маслом или другим ЛКМ хотите покрасить свой
            деревянный дом - не волнуйтесь. Мы с радостью Вам в этом поможем.
            Просто во время звонка предупредите, что Вам нужна помощь в выборе.
            После этого на нашу встречу мы обязательно приедем с несколькими
            чемоданами выкрасов разных фирм и вы увидите, в какой цвет будет
            покрашен ваш дом на первом нашем знакомстве.
          </p>
          <p class="green"><b>Удивили? Пока что это только слова. Удивим, когда
              выполним Вашу работу честно и на совесть. Звоните и мы сделаем все в
              кратчайшие сроки!</b></p>
        </div>
        <div class="read-more link hidden-md">
          <img class="to-svg" src="{{ Vite::image('icons/menu-arrow.svg') }}"
            alt="">
        </div>
      </div>
      <div class="right-col">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="about-info-col p-change">
                <div class="aic-big">><span class="int-js"
                    data-end="1000">1000</span></div>
                <div class="aic-info">отшлифованных домов
                  за весь период работы</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col">
                <div class="aic-big"><span class="int-js"
                    data-end="3">3</span> года</div>
                <div class="aic-info">гарантия качества
                  <small>(не заоблачные столетия, которые обещают другие компании,
                    а четкое объяснение жизнедеятельности древесины)</small>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col p-change">
                <div class="aic-big"><span class="int-js"
                    data-end="19">19</span> лет</div>
                <div class="aic-info">в сфере шлифовки и покраски деревянных
                  домов</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col p-change">
                <div class="aic-big"><span class="int-js"
                    data-end="4395">4395</span>м²</div>
                <div class="aic-info">выполненной работы в 2021 году</div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- 3_advantages -->
  <div class="advantages-box sanding-advantages-box">
    <div class="container">
      <img class="rellax absolute partners-green-1" data-rellax-speed="2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/partners_alt_green_1.png') }}"
        alt="">
      <img class="rellax absolute partners-green-2" data-rellax-speed="2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/partners_alt_green_2.png') }}"
        alt="">

      <div class="advantages-list">
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/1.png') }}"
              alt=""></div>
          <div class="ai-title">Строители из <br>
            Республики<br>
            Беларусь</div>
          <div class="ai-description">Мы работаем исключительно
            с опытными мастерами
            в области строительства
            и отделки деревянных домов</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/2.png') }}"
              alt=""></div>
          <div class="ai-title">Бесплатный<br>
            выезд</div>
          <div class="ai-description">Нашы специалисты бесплатно выезжают на
            объект для составления замеров и объема работ</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/3.png') }}"
              alt=""></div>
          <div class="ai-title">Поэтапная<br>
            оплата</div>
          <div class="ai-description">Поэтапная оплата всех выполненных работ
            позволит Вам контроллировать все процессы на объекте</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/4.png') }}"
              alt=""></div>
          <div class="ai-title">Профессиональное оборудование</div>
          <div class="ai-description">Мы работаем исключительно на
            профессиональном
            и сертифицированном оборудовании</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/5.png') }}"
              alt=""></div>
          <div class="ai-title">Заключение<br>
            договора</div>
          <div class="ai-description">Мы составляем договор,
            в котором детально прописываем все моменты</div>
        </div>
      </div>
      <div class="advantages-list">
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/6.png') }}"
              alt=""></div>
          <div class="ai-title">Убираем<br>
            мусор</div>
          <div class="ai-description">На последнем этапе производится уборка
            участка от мусора
            и остатков стройматериалов</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/7.png') }}"
              alt=""></div>
          <div class="ai-title">Качественные материалы</div>
          <div class="ai-description">В своей работе используем только
            качественные материалы всемирно известных брендов</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/8.png') }}"
              alt=""></div>
          <div class="ai-title">Контроль<br>
            качества</div>
          <div class="ai-description"> Вы будете уведомлены обо всех
            этапах выполнения работ и сможете контроллировать соблюдение сроков
          </div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/9.png') }}"
              alt=""></div>
          <div class="ai-title">Гарантия качества<br>
            и цены</div>
          <div class="ai-description">Мы закупаем все материалы у наших
            проверенных партнеров, что экономит на покупке материалов</div>
        </div>
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/10.png') }}"
              alt=""></div>
          <div class="ai-title">Соблюдение технологий</div>
          <div class="ai-description">При работе
            наши мастера придерживаются всех технологий (SIP, экопан, брус, бревно
            и т.д.)</div>
        </div>
      </div>
    </div>
  </div>

  <!-- 12_articles -->
  <div class="articles-box alt-articles-box" id="articles">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute article-green-1" data-rellax-speed="2"
          loading="lazy"
          src="{{ Vite::image('general/hanging/articles_green_1.png') }}"
          alt="">
      </div>
      <div class="title-row">
        <div class="h2"><b>Полезные</b> статьи</div>
      </div>
      <div class="articles-list flex-list">
        @foreach ($articles as $article)
          @include('elements.article')
        @endforeach
      </div>
      <div class="articles-btn">
        <a class="btn btn-orange btn-alt" href="/articles">
          <span>Посмотреть еще</span>
        </a>
      </div>
    </div>
  </div>

@endsection

