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
  <div class="home-box roofing-home-box planken-home-box">
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
        <div class="h1"><b>Отделка дома планкеном</b> в Москве и области</div>
        <div class="sub-h">
          <div class="three-dots"><i></i><i></i><i></i></div>
          <div>Выполним отделку планкеном на вашем доме. Сделаем качественно
            выполненный ремонт<br>
            и превратим ваш дом в дворец!</div>
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
        <div class="down-circle"></div>
      </div>
    </div>
  </div>

  <!-- 11_portfolio -->
  <div
    class="portfolio-box alt-portfolio-box sanding-portfolio-box roofing-portfolio-box planken-portfolio-box"
    id="portfolio">
    <div class="container">
      <div class="title-row">
        <div class="h2"><b>Примеры</b> работ</div>
      </div>
      <div class="portfolio-list grid-lg-3 grid-md-2">
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover" data-popup=".popup-project">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/portfolio/1.png') }}"
              alt="">
          </div>
          <div class="pi-title">«Название проекта»</div>
          <div class="pi-descrition">Небольшое описание проекта всего в две-три
            строки</div>
          <div class="pi-link link">Посмотреть подробнее <img class="to-svg"
              data-popup=".popup-project" loading="lazy"
              src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
          </div>
        </div>
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover" data-popup=".popup-project">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/portfolio/2.png') }}"
              alt="">
          </div>
          <div class="pi-title">«Название проекта»</div>
          <div class="pi-descrition">Небольшое описание проекта всего в две-три
            строки</div>
          <div class="pi-link link" data-popup=".popup-project">Посмотреть
            подробнее <img class="to-svg" loading="lazy"
              src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
          </div>
        </div>
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover" data-popup=".popup-project">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/portfolio/3.png') }}"
              alt="">
          </div>
          <div class="pi-title">«Название проекта»</div>
          <div class="pi-descrition">Небольшое описание проекта всего в две-три
            строки</div>
          <div class="pi-link link" data-popup=".popup-project">Посмотреть
            подробнее <img class="to-svg" loading="lazy"
              src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
          </div>
        </div>

        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover"
            data-popup=".popup-project">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/portfolio/4.png') }}"
              alt="">
          </div>
          <div class="pi-title">«Название проекта»</div>
          <div class="pi-descrition">Небольшое описание проекта всего в две-три
            строки</div>
          <div class="pi-link link" data-popup=".popup-project">Посмотреть
            подробнее <img class="to-svg" loading="lazy"
              src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
          </div>
        </div>
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover"
            data-popup=".popup-project">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/portfolio/5.png') }}"
              alt="">
          </div>
          <div class="pi-title">«Название проекта»</div>
          <div class="pi-descrition">Небольшое описание проекта всего в две-три
            строки</div>
          <div class="pi-link link" data-popup=".popup-project">Посмотреть
            подробнее <img class="to-svg" loading="lazy"
              src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
          </div>
        </div>
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover"
            data-popup=".popup-project">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/portfolio/6.png') }}"
              alt="">
          </div>
          <div class="pi-title">«Название проекта»</div>
          <div class="pi-descrition">Небольшое описание проекта всего в две-три
            строки</div>
          <div class="pi-link link" data-popup=".popup-project">Посмотреть
            подробнее <img class="to-svg" loading="lazy"
              src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
          </div>
        </div>
      </div>
      <div class="portfolio-bottom">
        <div class="pb-info gray">Больше реализованных проектов смотрите в нашем
          Instagram</div>
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

  <!-- 9_process -->
  <div class="process-box sanding-process-box reconstruction-process-box"
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
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">01</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/1.png') }}" alt="">
          </div>
          <div class="pi-title">Оставляете заявку
          </div>
          <div class="pi-description">После заявки наш менеджер перезвонит Вам в
            течение 30 минут для обсуждения деталей</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">02</span>
            <img loading="lazy"
              src="{{ Vite::image('general/process/2.png') }}" alt="">
          </div>
          <div class="pi-title">Выезд замерщика
          </div>
          <div class="pi-description">Наш специалист бесплатно выезжает на объект
            для составления замеров и объема работ</div>
        </div>
        <div class="process-item">
          <div class="pi-image">
            <span class="pi-int">03</span>
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
            <span class="pi-int">04</span>
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
  <div class="price-box roofing-price-box planken-price-box" id="price">
    <div class="container">

      <div class="price-discount visible-xxl">
        <img class="back-green" loading="lazy"
          src="{{ Vite::image('backgrounds/price_discount.png') }}"
          alt="">
        <p>Скидки при больших объемах работ <b>от 5% до 10%</b></p>
      </div>

      <div class="title-row">
        <div class="h2"><b>Актуальный прайс</b><br>по монтажу
          планкена</div>
      </div>
      <div class="price-table">
        <table>
          <tbody>
            <tr>
              <td>Монтаж обрешетки на деревянную стену (Брус-OSB/бревно)</td>
              <td>от 200р м²</td>
            </tr>
            <tr>
              <td>Монтаж обрешетки на каменную стену (бетон/кирпич)</td>
              <td>от 300р м²</td>
            </tr>
            <tr>
              <td>Монтаж обрешетки для подшивной доски крыши</td>
              <td>от 200р м²</td>
            </tr>
            <tr>
              <td>Утепление стен (1 слой)</td>
              <td>от 70р (50мм) м²</td>
            </tr>
            <tr>
              <td>Ветрозащитная плита или мембрана (снаружи)/пароизоляция (внутри)
              </td>
              <td>от 50р м²</td>
            </tr>
            <tr>
              <td>Монтаж вагонки штиль (потолок, внутренняя отделка, на кляймеры)
              </td>
              <td>от 350р м²</td>
            </tr>
            <tr>
              <td>Монтаж скандинавской фасадной доски (гвозди в пласть доски)</td>
              <td>от 350р м²</td>
            </tr>
            <tr>
              <td>Монтаж имитации бруса (саморезы в шип)</td>
              <td>от 500р м²</td>
            </tr>
            <tr>
              <td>Монтаж планкена (скрытый крепеж Змейка)</td>
              <td>от 650р м²</td>
            </tr>
            <tr>
              <td>Монтаж подшивной доски крыши (планкен и т.п.)</td>
              <td>от 550р м²</td>
            </tr>
            <tr>
              <td>Установка наличника, угловой доски</td>
              <td>от 250р м.п.</td>
            </tr>
            <tr>
              <td>Отделка оконных и дверных проемов</td>
              <td>от 250р м.п.</td>
            </tr>
            <tr>
              <td>Демонтаж старой обшивки</td>
              <td>от 150р м²</td>
            </tr>
            <tr>
              <td>Покраска планкена (1 слой)</td>
              <td>от 100р м²</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- 2_about -->
  <div class="about-box alt-about-box roofing-about-box planken-about-box"
    id="about">
    <img class="hidden-md rellax absolute right-green" data-rellax-speed="1"
      loading="lazy"
      src="{{ Vite::image('general/hanging/about_green_mobile.png') }}"
      alt="">
    <div class="container grid">
      <div class="left-col">
        <div class="h2"><b>Отделка дома</b> планкеном</div>
        <div class="big-content">
          <div class="sub-h">
            Необходимо отметить, что любое строение можно обшить планкеном. То
            есть это может быть каменный дом, деревянный сруб или каркасная
            постройка. Этот универсальный материал, как и вагонка, монтируется
            только на обрешетку, которую устанавливают и крепят к стенам дома.
            Поэтому мы можем выполнить монтаж планкена на доме из любого
            материала.
          </div>
          <div class="text-item format-text text-to-hide">
            <p>
            <h4>Существует два основных способа монтажа планкена:</h4>
            </p>
            <p><b class="green">Закрытый</b>. Этот способ используется для
              монтажа скошенных досок. Он достаточно трудоемкий, но результатом
              будет эффект монолитной стены из дерева. После завершения монтажа на
              поверхности не будет стыков, крепежные элементы не будут заметны.
              Если нет навыков работы с планкеном, то лучше доверить процесс
              монтажа профессионалам. При монтаже планкена закрытым способом
              используют такие виды крепежных элементов:</p>
            <p><b>"Мост"</b>. Он подходит для крепления скошенного планкена. По
              своему виду крепеж напоминает маленький мостик с прямоугольной
              пластиной, которая соединяет два усика;</p>
            <p><b>"Ключ"</b>. Это простой тип крепежа, для работы с которым не
              нужны специализированные инструменты или определенные навыки. По
              виду крепежный элемент похож на замочный ключ, в котором есть
              отверстия для самореза.
              Еще в нем есть вертикальный стопор, обеспечивающий вентиляционный
              зазор между отдельными панелями;</p>

            <p><b>"Змейка"</b>. Крепеж подходит не только для скошенной, но и для
              прямой доски. Это металлическая пластина, имеющая отверстия для
              гвоздей и саморезов. На каждой планке есть стопор, обеспечивающий
              небольшой зазор для вентиляции фасада. Благодаря этому крепежному
              элементу облицовка из планкена надолго сохранит свой вид;</p>
            <p><b>"Краб"</b>. Крепежный элемент состоит из металлической основы и
              двух Г-образных отбортовок.</p>
            <p><b>Открытый</b>. Это наиболее простой способ монтажа скошенного
              планкена. Он заключается в том, что каждая доска фиксируется на
              обрешетке при помощи гвоздей или саморезов сквозным методом. Причем
              шляпки крепежных элементов остаются открытыми на лицевой стороне
              досок. Благодаря открытому способу отделки фасада планкеном из
              лиственницы процесс не отнимет много времени, поскольку не требуется
              специальных знаний и инструментов. Основное преимущество этого
              способа заключается в простоте демонтажа при необходимости замены
              панелей с дефектами.</p>
            <p>Если вам нужно будет сделать отделку планкеном любым способом и вы
              решите обратится к профессионалам, то позвоните в компанию
              Woodhouse495 и мы выполним ваш заказ любой сложности.</p>
          </div>
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
  <div class="advantages-box sanding-advantages-box planken-advantages-box">
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
  <div class="articles-box alt-articles-box planken-articles-box"
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
      <div class="articles-list grid-lg-3 grid-md-2">
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

