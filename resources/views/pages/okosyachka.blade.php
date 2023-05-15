@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('menu_items')
  <a class="menu-item" href="#wasistdas">Что такое окосячка</a>
  <a class="menu-item" href="#process">Этапы работы</a>
  <a class="menu-item" href="#price">Прайс</a>
  <a class="menu-item" href="#about">Преимущества</a>
@endsection

@section('content')

  <!-- 1_home -->
  <div class="home-box okosyachka-home-box">
    <div class="container grid-with-form grid grid-md-12">
      <img class="visible-md rellax absolute left-sliver" data-rellax-speed="1"
        loading="lazy"
        src="{{ Vite::image('general/hanging/1_home_sliver.png') }}"
        alt="">

      <div class="left-col">
        <div class="h1"><b>Окосячка деревянных домов</b> в Москве и МО</div>
        <div class="sub-h sub-h-alt">
          Окосячка деревянных домов от специалистов-плотников с опытом работ более
          15 лет. Бесплатный выезд замерщика на объект. Работа по договору.
        </div>
      </div>
      <div class="right-col">
        <form class="form-wrapper">
          <div class="title-row">
            <div class="h3"><b>Закажите бесплатный вызов мастера</b></div>
            <div class="sub-h">Заполните форму и мы перезвоним Вам в течение 30
              мин</div>
          </div>
          <div class="form-input visible-lg">
            <input type="text" placeholder="Введите Ваше имя" minlength="1"
              required>
          </div>
          <div class="form-input">
            <input type="text" placeholder="+7 (___) ___ - __ - __" phone
              required>
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

  <!-- 19_okosyachka -->
  <div class="okosyachka-box" id="wasistdas">
    <div class="container grid-lg-2">
      <img class="visible-md rellax absolute partners-green-2"
        data-rellax-speed="2" loading="lazy"
        src="{{ Vite::image('general/hanging/partners_alt_green_2.png') }}"
        alt="">

      <div class="left-side">
        <div class="h2 visible-lg"><b>Что такое окосячка</b> в деревянном доме?
        </div>
        <div class="okos-image img-cover-wrap">
          <img src="{{ Vite::image('general/okosyachka.png') }}" alt="Окосячка">
        </div>
      </div>

      <div class="right-side">
        <div class="h2 hidden-lg"><b>Что такое окосячка</b> в деревянном доме?
        </div>

        <div class="format-text text-to-hide text-to-hide-alt">
          <p>В отличии от кирпичного или блочного дома с деревянными домами
            ситуация по усадке совершенно другая. <b>Именно для того, чтобы ваши
              окна и двери оставались в целости</b> и сохранности с начала их
            монтажа на протяжении длительного времени в деревянном доме и
            выполняется черновая обсада.</p>
          <p>Это специальный процесс пропиливания места под деревянный брусок,
            который будет служить определенным держателем двери или окна.</p>
          <p><b>Обсадная коробка по своей сути</b> – это защитный элемент в
            конструкции оконного или дверного проема, который обеспечивает
            сохранность геометрии окон/дверей. Обсада или окосячка в деревянном
            доме – этакий буфер между тяжелой «живой» стеной и хрупким стеклом.
            Правильная обсада прослужит столько же лет, что и сам дом.</p>
          <p>В связи с тем, что большинство деревянных домов строят из бруса или
            бревна естественной влажности, со временем он начинает сохнуть и
            садиться. Соответственно и стены "садятся" вместе с ним.</p>
          <p>Процесс усадки дома длится годами. Но даже через 3-5 лет никто не
            возьмется гарантировать, что проемы не поведет в будущем. Поэтому с
            давних времен окна и двери в деревянных домах устанавливались с
            обсадными коробами – их тогда называли колодами.</p>
          <p><b>Современная обсада</b> – технологичная вещь, отлично
            приспособленная для установки пластиковых и алюминиевых окон, тяжелых
            балконных блоков, металлических входных дверей.</p>
        </div>
        <div class="read-more link hidden-md">
          <img class="to-svg" src="{{ Vite::image('icons/menu-arrow.svg') }}"
            alt="">
        </div>
      </div>

    </div>
  </div>

  <!-- 9_process -->
  <div class="process-box sanding-process-box" id="process">
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
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">01</span>
            <img loading="lazy" src="{{ Vite::image('general/process/1.png') }}"
              alt="">
          </div>
          <div class="pi-title">Оставляете заявку
          </div>
          <div class="pi-description">После заявки наш менеджер перезвонит Вам в
            течение 30 минут для обсуждения деталей</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">02</span>
            <img loading="lazy" src="{{ Vite::image('general/process/2.png') }}"
              alt="">
          </div>
          <div class="pi-title">Выезд замерщика
          </div>
          <div class="pi-description">Наш специалист бесплатно выезжает на объект
            для составления замеров и объема работ</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">03</span>
            <img loading="lazy" src="{{ Vite::image('general/process/3.png') }}"
              alt="">
          </div>
          <div class="pi-title">Составляем смету</div>
          <div class="pi-description">После замеров
            мы составляем подробную смету. Цена не изменится после начала работ
          </div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">04</span>
            <img loading="lazy" src="{{ Vite::image('general/process/4.png') }}"
              alt="">
          </div>
          <div class="pi-title">Выполняем работу
          </div>
          <div class="pi-description">Наши специалисты приезжают и начинают
            работу
            над Вашей задачей
            в назначенный срок</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">05</span>
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

  <!-- 16_price -->
  <div class="price-box okosyachka-price-box" id="price">
    <div class="container">
      <img class="visible-md rellax absolute right-shaving"
        data-rellax-speed="-2" loading="lazy"
        src="{{ Vite::image('general/hanging/home_shaving_blur.png') }}"
        alt="">

      <div class="price-discount visible-xxl">
        <img class="back-green" loading="lazy"
          src="{{ Vite::image('backgrounds/price_discount_window.png') }}"
          alt="">
        <p>Окосячка<br>каждого 10 окна бесплатно</p>
        <p class="big">10</p>
      </div>

      <div class="title-row">
        <div class="h2"><b>Актуальный прайс по окосячке</b> деревянного дома
        </div>
      </div>
      <div class="price-table">
        {!! $page['description'] !!}
      </div>
      <div class="portfolio-bottom visible-md">
        <div class="pb-info gray">Смотрите реализованные
          проекты в нашем Instagram</div>
        <a class="btn btn-orange btn-instagram" target="_blank"
          href="https://www.instagram.com/woodhouse495/">
          <span>
            <img loading="lazy"
              src="{{ Vite::image('icons/instagram-btn.svg') }}"
              alt="">
            Подписывайтесь на нас
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- 2_about -->
  <div class="about-box alt-about okosyachka-about-box" id="about">
    <img class="hidden-md rellax absolute right-green" data-rellax-speed="1"
      loading="lazy"
      src="{{ Vite::image('general/hanging/about_green_mobile.png') }}"
      alt="">
    <div class="container grid-2">
      <div class="left-col">
        <div class="h2"><b>Мы ведем свою деятельность</b> с 2003 года</div>
        <div class="sub-h">
          Для кого-то это уже большой пройденный этап, кому-то это покажется
          небольшой цифрой, но для нас — это только начало нашего большого пути.
        </div>
        <div class="text-item format-text text-to-hide text-to-hide-alt">
          <p>За это время мы выполнили более 20 000 строительно-отделочных работ
            деревянных домов. Самое ценное наше приобретение - опыт, который мы
            накапливали в продолжении этих лет. И несомненно штаб наших бесценных
            сотрудников, в их число входит: проектное бюро, отдел по работе с
            клиентами, сметный отдел, профессиональные строители из Республики
            Беларусь, которые славятся своим трудолюбием и мастерством.</p>
          <p>Наша дружная команда выполнит поставленные перед нами задачи в
            кратчайшие сроки и с высочайшим качеством. Выполненные нами
            строительно-отделочные работы вашего деревянного дома будут хранить
            тепло вашего очага в течение многих десятилетий.</p>
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
              <div class="about-info-col">
                <div class="aic-big">><span class="int-js"
                    data-end="1400">1400</span></div>
                <div class="aic-info">Выполненных проектов по отделке и
                  строительству деревянных домов</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col">
                <div class="aic-big"><span class="int-js"
                    data-end="19">19</span> лет</div>
                <div class="aic-info">в сфере строительства деревянных домов
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col">
                <div class="aic-big"><span class="int-js"
                    data-end="10">10</span> лет</div>
                <div class="aic-info">гарантии на выполненные работы</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col">
                <div class="aic-big"><span class="int-js"
                    data-end="8750">8750</span>м²</div>
                <div class="aic-info">объектов общей площадью сдано в 2021 году
                </div>
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
  <div class="articles-box alt-articles-box okosyachka-articles-box"
    id="articles">
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

