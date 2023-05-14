@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('menu_items')
  <a class="menu-item" href="#skills">что мы умеем</a>
  <a class="menu-item visible-xl" href="#building">строительство
    домов</a>
  <a class="menu-item" href="#reviews">отзывы</a>
  <a class="menu-item" href="#process">Этапы работы</a>
  <a class="menu-item" href="#portfolio">выполненные проекты</a>
@endsection

@section('content')

  <!-- 1_home -->
  <div class="home-box index-home-box">
    <div class="container grid-with-form grid grid-md-12">
      <img class="visible-md absolute left-green" loading="lazy"
        src="{{ Vite::image('general/hanging/home_green_1.png') }}"
        alt="">
      <img class="visible-md absolute right-green" loading="lazy"
        src="{{ Vite::image('general/hanging/home_green_2.png') }}"
        alt="">
      <img class="visible-md rellax absolute left-shaving" data-rellax-speed="1"
        loading="lazy" src="{{ Vite::image('general/hanging/home_shaving.png') }}"
        alt="">
      <img class="visible-md rellax absolute right-shaving" data-rellax-speed="-2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/home_shaving_blur.png') }}"
        alt="">
      <img class="hidden-md rellax absolute mobile-shaving" data-rellax-speed="-2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/home_shaving_mobile.png') }}"
        alt="">
      <div class="left-col">
        <div class="h1"><b>Строительство <br class="hidden-sm">и отделка
            деревянных домов</b>
          в Москве и МО</div>
        <div class="sub-h">
          <div class="three-dots"><i></i><i></i><i></i></div>
          <div>Гарантируем качество и лучшую цену на рынке. Предлагаем
            индивидуальный подход к каждому клиенту<span class="visible-md">, а не
              шаблонные проекты, которые есть у большинства компаний.</span></div>
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
      <div class="down-circle-row col-full">
        <div class="down-circle"></div>
      </div>
    </div>
  </div>

  <!-- 2_about -->
  <div class="about-box" id="about">
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
        <div class="text-item format-text text-to-hide">
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
                <div class="aic-big"><span class="int-js" data-end="19">19</span>
                  лет</div>
                <div class="aic-info">в сфере строительства деревянных домов</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="about-info-col">
                <div class="aic-big"><span class="int-js" data-end="10">10</span>
                  лет</div>
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
  <div class="advantages-box">
    <div class="container">
      <div class="advantages-list">
        <div class="advantages-item">
          <div class="ai-image"><img loading="lazy"
              src="{{ Vite::image('general/advantages/1.png') }}"
              alt="">
          </div>
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

  <!-- 4_skills -->
  <div class="skills-box" id="skills">
    <div class="container">
      <div class="title-row">
        <div class="h2"><b>Что мы</b> умеем</div>
        <div class="sub-h">Профессиональные мастера-отделочники выполнят любую
          работу, которая связанная со строительством и отделкой деревянных домов
        </div>
      </div>
      <div class="sign-list">
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж/ремонт кровли</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Устройство пола</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Отделка стен внутри дома</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж перегородок</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж мансардных окон</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж дверей</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж водосточной системы</div>
        </div>
      </div>

      <img class="rellax absolute wood-piece-blur" data-rellax-speed="1"
        loading="lazy"
        src="{{ Vite::image('general/hanging/skills_wood_piece_blur.png') }}"
        alt="">
      <img class="rellax absolute wood-piece" data-rellax-speed="2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/skills_wood_piece.png') }}"
        alt="">
    </div>
  </div>

  <!-- 5_services -->
  <div class="services-box" id="services">
    <div class="container">
      <div class="title-row">
        <div class="h2"><b>Какие услуги для Вас</b> мы можем оказать</div>
        <div class="sub-h">Цены указаны в зависимости от расположения объекта,
          объёма и сложности работ — расценки могут корректироваться</div>
      </div>
      <div class="services-list grid grid-md-3 grid-lg-4">
        <a class="services-item" href="/sanding">
          <div class="si-img img-cover-wrap hover">
            <div class="link orange show-more">
              <span>Подробнее</span> <img class="to-svg" loading="lazy"
                src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
            </div>
            <img loading="lazy" src="{{ Vite::image('tmp/services/1.png') }}"
              alt="">
          </div>
          <div class="si-title">Шлифовка деревянных срубов, домов, бань</div>
          <span class="a si-link link">посмотреть прайс <img class="to-svg"
              loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
              alt=""></span>
        </a>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/2.png') }}"
              alt="">
          </div>
          <div class="si-title">Покраска срубов,<br>
            домов, бань</div>
          <div class="si-price">от 70 руб/м²</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/3.png') }}"
              alt="">
          </div>
          <div class="si-title">Конопатка домов,<br>
            срубов, бань</div>
          <div class="si-price">от 80 руб/м.п.</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/4.png') }}"
              alt="">
          </div>
          <div class="si-title">Отделка шва декоративным канатом</div>
          <div class="si-price">от 35 руб/м.п.</div>
        </div>

        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/5.png') }}"
              alt="">
          </div>
          <div class="si-title">Утепление по технологии теплый шов. <b
              class="orange">Гарантия 10 лет</b></div>
          <div class="si-price">от 100 руб/м.п.</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/6.png') }}"
              alt="">
          </div>
          <div class="si-title">Баширование<br>
            древесины</div>
          <div class="si-price">от 350 руб/м²</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/7.png') }}"
              alt="">
          </div>
          <div class="si-title">Устройство каркасных перегородок</div>
          <div class="si-price">от 400 руб/м²</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/8.png') }}"
              alt="">
          </div>
          <div class="si-title">Отделка стен<br>
            вагонкой</div>
          <div class="si-price">от 380 руб/м²</div>
        </div>

        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/9.png') }}"
              alt="">
          </div>
          <div class="si-title">Отделка потолков<br>
            вагонкой</div>
          <div class="si-price">от 350 руб/м²</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/10.png') }}"
              alt="">
          </div>
          <div class="si-title">Монтаж<br>
            сайдинга</div>
          <div class="si-price">от 320 руб/м²</div>
        </div>
        <a class="services-item" href="/okosyachka">
          <div class="si-img img-cover-wrap hover">
            <div class="link orange show-more">
              <span>Подробнее</span> <img class="to-svg" loading="lazy"
                src="{{ Vite::image('icons/link-arrow.svg') }}" alt="">
            </div>
            <img loading="lazy" src="{{ Vite::image('tmp/services/11.png') }}"
              alt="">
          </div>
          <div class="si-title">Окосячка деревянных<br>
            домов</div>
          <span class="si-link link">посмотреть прайс</span>
        </a>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/12.png') }}"
              alt="">
          </div>
          <div class="si-title">Устройство залыбин<br>
            с подшлифовкой</div>
          <div class="si-price">от 600 руб/м.п.</div>
        </div>

        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/13.png') }}"
              alt="">
          </div>
          <div class="si-title">Установка<br>
            дверей</div>
          <div class="si-price">от 2200 руб/шт</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/14.png') }}"
              alt="">
          </div>
          <div class="si-title">Установка<br>
            окон</div>
          <div class="si-price">от 1600 руб/шт</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/15.png') }}"
              alt="">
          </div>
          <div class="si-title">Изготовление и монтаж наличников</div>
          <div class="si-price">от 1100 руб/шт</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/16.png') }}"
              alt="">
          </div>
          <div class="si-title">Настил шпунтованной<br>
            доски</div>
          <div class="si-price">от 400 руб/м²</div>
        </div>

        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/17.png') }}"
              alt="">
          </div>
          <div class="si-title">Укладка<br>
            ламината</div>
          <div class="si-price">от 250 руб/м²</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/18.png') }}"
              alt="">
          </div>
          <div class="si-title">Укладка плитки<br>
            с затиркой швов</div>
          <div class="si-price">от 1100 руб/м²</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/19.png') }}"
              alt="">
          </div>
          <div class="si-title">Подшивка<br>
            свесов</div>
          <div class="si-price">от 550 руб/м.п.</div>
        </div>
        <div class="services-item">
          <div class="si-img img-cover-wrap">
            <img loading="lazy" src="{{ Vite::image('tmp/services/20.png') }}"
              alt="">
          </div>
          <div class="si-title">Монтаж водосточной<br>
            системы</div>
          <div class="si-price">от 320 руб/м.п.</div>
        </div>
        <div class="services-btn col-full">
          <div class="btn btn-orange btn-alt btn-toggle">
            <span class="b-when-untive">Посмотреть ещё</span>
            <span class="b-when-active">Скрыть</span>
          </div>
        </div>
      </div>

      <div class="services-extra">
        <div class="se-title">Дополнительные услуги</div>
        <div class="se-item">
          <div class="sei-image"><img loading="lazy"
              src="{{ Vite::image('general/services/1.png') }}" alt="">
          </div>
          <div class="sei-title">Электрика</div>
        </div>
        <div class="se-item">
          <div class="sei-image"><img loading="lazy"
              src="{{ Vite::image('general/services/2.png') }}" alt="">
          </div>
          <div class="sei-title">Сантехника</div>
        </div>
        <div class="se-item">
          <div class="sei-image"><img loading="lazy"
              src="{{ Vite::image('general/services/3.png') }}" alt="">
          </div>
          <div class="sei-title">Кровельные<br>
            работы</div>
        </div>
        <div class="se-item">
          <div class="sei-image"><img loading="lazy"
              src="{{ Vite::image('general/services/4.png') }}" alt="">
          </div>
          <div class="sei-title">Фундаментные работы</div>
        </div>
        <div class="se-item">
          <div class="sei-image"><img loading="lazy"
              src="{{ Vite::image('general/services/5.png') }}" alt="">
          </div>
          <div class="sei-title">Установка<br>
            заборов</div>
        </div>
        <div class="se-item">
          <div class="sei-image"><img loading="lazy"
              src="{{ Vite::image('general/services/6.png') }}" alt="">
          </div>
          <div class="sei-title">Реконструкция</div>
        </div>
      </div>
    </div>
  </div>

  <!-- 6_building -->
  <div class="building-box" id="building">
    <div class="container visible-md">
      <img class="rellax absolute hang-skrew" data-rellax-speed="-1"
        loading="lazy" src="{{ Vite::image('general/hanging/screw.png') }}"
        alt="">
      <img class="rellax absolute hang-green" data-rellax-speed="-2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/building_green.png') }}"
        alt="">
    </div>
    <div class="hidden-md">
      <img class="hidden-md rellax absolute hang-skrew-right"
        data-rellax-speed="-1" loading="lazy"
        src="{{ Vite::image('general/hanging/screw_mobile.png') }}"
        alt="">
      <img class="hidden-md rellax absolute hang-green-left"
        data-rellax-speed="-2" loading="lazy"
        src="{{ Vite::image('general/hanging/building_green_1_mobile.png') }}"
        alt="">
      <img class="hidden-md rellax absolute hang-green-right"
        data-rellax-speed="-2" loading="lazy"
        src="{{ Vite::image('general/hanging/building_green_2_mobile.png') }}"
        alt="">
    </div>

    <div class="big-container">
      <div class="container grid-xl-2">
        <div class="left-side">
          <div class="h2">Мы занимаеся <b>не только отделочными работами,</b>
            <b class="green">а ещё и строим дома</b>
          </div>
          <div class="sub-h">Построим дом вашей мечты! Сделаем всё на высшем
            уровне с гарантией качества и долговечности!</div>
          <div class="building-list grid-2 grid-md-3">
            <div class="building-item">
              <div class="bi-image img-cover-wrap"><img loading="lazy"
                  src="{{ Vite::image('general/building/1.png') }}"
                  alt="">
              </div>
              <div class="bi-title">Каркасные<br>дома</div>
            </div>
            <div class="building-item">
              <div class="bi-image img-cover-wrap"><img loading="lazy"
                  src="{{ Vite::image('general/building/2.png') }}"
                  alt="">
              </div>
              <div class="bi-title">Дома из клееного бруса</div>
            </div>
            <div class="building-item">
              <div class="bi-image img-cover-wrap"><img loading="lazy"
                  src="{{ Vite::image('general/building/3.png') }}"
                  alt="">
              </div>
              <div class="bi-title">Дома из профилирован<span>-</span>ного бруса
              </div>
            </div>
            <div class="building-item">
              <div class="bi-image img-cover-wrap"><img loading="lazy"
                  src="{{ Vite::image('general/building/4.png') }}"
                  alt="">
              </div>
              <div class="bi-title">Дома из оцилиндрованного бревна</div>
            </div>
            <div class="building-item">
              <div class="bi-image img-cover-wrap"><img loading="lazy"
                  src="{{ Vite::image('general/building/5.png') }}"
                  alt="">
              </div>
              <div class="bi-title">Деревянные лестницы</div>
            </div>
            <div class="building-item">
              <div class="bi-image img-cover-wrap"><img loading="lazy"
                  src="{{ Vite::image('general/building/6.png') }}"
                  alt="">
              </div>
              <div class="bi-title">Беседки</div>
            </div>
          </div>
          <div class="btn btn-orange" data-popup=".popup-consultation">
            <span>Получить консультацию по строительству дома</span>
          </div>

          <div class="down-circle-row hidden-md">
            <div class="down-circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 7_reviews -->
  <div class="reviews-box" id="reviews">
    <div class="container">
      <img class="visible-md rellax absolute wood-piece" data-rellax-speed="-5"
        loading="lazy"
        src="{{ Vite::image('general/hanging/reviews_wood_piece.png') }}"
        alt="">

      <div class="title-row">
        <div class="h2 visible-md"><b>Более 250 довольных клиентов</b> — лучшая
          оценка нашей работы</div>
        <div class="h2 hidden-md"><b>У нас более 250 довольных</b> клиентов</div>
        <div class="sub-h">По статистике 82% клиентов рекомендуют нас знакомым,
          а 25% возвращаются к нам за услугами повторно</div>
      </div>
      <div class="reviews-video-wrapper">
        <div class="reviews-video">
          <img class="rv-green" loading="lazy"
            src="{{ Vite::image('general/hanging/reviews_green.png') }}"
            alt="">
          <div class="rv-preview"><img loading="lazy"
              src="{{ Vite::image('tmp/reviews/preview.png') }}"
              alt=""></div>
          <div class="rv-circle" data-popup=".popup-video"></div>
        </div>
        <div class="rv-name">
          <div class="rv-title">Видеоотзыв Марии Шевченко</div>
          <span class="gray">Тип заказа: деревянная лестница</span>
        </div>
      </div>

      <div class="reviews-list grid-xl-3 grid-lg-2 grid visible-sm">
        <div class="reviews-item">
          <div class="ri-top">
            <div class="rit-image"><img loading="lazy"
                src="https://abrakadabra.fun/uploads/posts/2021-12/thumbs/1640528649_39-abrakadabra-fun-p-serii-chelovek-na-avu-44.jpg"
                alt=""></div>
            <div class="ri-info">
              <div class="ri-name">Андрей Рыбаков</div>
              <div class="ri-green">Строительство дома из бруса</div>
            </div>
          </div>
          <div class="ri-text">Очень остались довольны работой бригады, работали
            очень аккуратно и тщательно. Большое спасибо! Большое спасибо
            менеджеру Стрельникову Дмитрию, очень грамотный и внимательный
            менеджер. В целом довольны работой всей компании. Спасибо!!!</div>
        </div>
        <div class="reviews-item">
          <div class="ri-top">
            <div class="rit-image"><img loading="lazy"
                src="https://abrakadabra.fun/uploads/posts/2021-12/thumbs/1640528649_39-abrakadabra-fun-p-serii-chelovek-na-avu-44.jpg"
                alt=""></div>
            <div class="ri-info">
              <div class="ri-name">Валерия Шишкина</div>
              <div class="ri-green">Отделка стен и потолка вагонкой</div>
            </div>
          </div>
          <div class="ri-text">Мне все очень понравилось. Начиная с этапа общения
            с менеджером по телефону, при первой встрече и последующих встречах
            подготов. этапа. Отдельно спасибо бригаде (Николай, Евгений и команда)
            работали качественно, добросовестно. Буду рекомендовать компанию всем
            своим друзьям. Спасибо огромное за мой дом.</div>
        </div>
        <div class="reviews-item">
          <div class="ri-top">
            <div class="rit-image"><img loading="lazy"
                src="https://abrakadabra.fun/uploads/posts/2021-12/thumbs/1640528649_39-abrakadabra-fun-p-serii-chelovek-na-avu-44.jpg"
                alt=""></div>
            <div class="ri-info">
              <div class="ri-name">Иван Малов</div>
              <div class="ri-green">Строительство каркасного дома </div>
            </div>
          </div>
          <div class="ri-text">Построили дом качественно, все этапы выполнили.
            Благодарен бригаде Константина, прорабу Роману за работу и советы по
            обустройству и эксплуатации дома. Компанию "WoodHouse495" рекомендую!
          </div>
        </div>

        <div class="reviews-item">
          <div class="ri-top">
            <div class="rit-image"><img loading="lazy"
                src="https://abrakadabra.fun/uploads/posts/2021-12/thumbs/1640528649_39-abrakadabra-fun-p-serii-chelovek-na-avu-44.jpg"
                alt=""></div>
            <div class="ri-info">
              <div class="ri-name">Валерия Шишкина</div>
              <div class="ri-green">Отделка стен и потолка вагонкой</div>
            </div>
          </div>
          <div class="ri-text">Мне все очень понравилось. Начиная с этапа общения
            с менеджером по телефону, при первой встрече и последующих встречах
            подготов. этапа. Отдельно спасибо бригаде (Николай, Евгений и команда)
            работали качественно, добросовестно. Буду рекомендовать компанию всем
            своим друзьям. Спасибо огромное за мой дом.</div>
        </div>
        <div class="reviews-item">
          <div class="ri-top">
            <div class="rit-image"><img loading="lazy"
                src="https://abrakadabra.fun/uploads/posts/2021-12/thumbs/1640528649_39-abrakadabra-fun-p-serii-chelovek-na-avu-44.jpg"
                alt=""></div>
            <div class="ri-info">
              <div class="ri-name">Иван Малов</div>
              <div class="ri-green">Строительство каркасного дома </div>
            </div>
          </div>
          <div class="ri-text">Построили дом качественно, все этапы выполнили.
            Благодарен бригаде Константина, прорабу Роману за работу и советы по
            обустройству и эксплуатации дома. Компанию "WoodHouse495" рекомендую!
          </div>
        </div>
        <div class="reviews-item">
          <div class="ri-top">
            <div class="rit-image"><img loading="lazy"
                src="https://abrakadabra.fun/uploads/posts/2021-12/thumbs/1640528649_39-abrakadabra-fun-p-serii-chelovek-na-avu-44.jpg"
                alt=""></div>
            <div class="ri-info">
              <div class="ri-name">Андрей Рыбаков</div>
              <div class="ri-green">Строительство дома из бруса</div>
            </div>
          </div>
          <div class="ri-text">Очень остались довольны работой бригады, работали
            очень аккуратно и тщательно. Большое спасибо! Большое спасибо
            менеджеру Стрельникову Дмитрию, очень грамотный и внимательный
            менеджер. В целом довольны работой всей компании. Спасибо!!!</div>
        </div>
      </div>

    </div>
  </div>

  <!-- 8_partners -->
  <div class="partners-box">
    <img class="hidden-md rellax absolute partners-green-left"
      data-rellax-speed="4" loading="lazy"
      src="{{ Vite::image('general/hanging/partners_green_left_mobile.png') }}"
      alt="">
    <img class="hidden-md rellax absolute partners-green-right"
      data-rellax-speed="3" loading="lazy"
      src="{{ Vite::image('general/hanging/partners_green_right_mobile.png') }}"
      alt="">

    <div class="container">
      <img class="visible-md rellax absolute partners-green"
        data-rellax-speed="-6" loading="lazy"
        src="{{ Vite::image('general/hanging/partners_green.png') }}"
        alt="">
      <div class="title-row">
        <div class="h2">
          <b>Мы работаем <span class="visible-md">только</span></b>
          с проверенными производителями
        </div>
        <div class="sub-h">Выбираем в первую очередь качество, проверенное
          годами</div>
      </div>
      <div class="partners-image">
        <img class="visible-md" loading="lazy"
          src="{{ Vite::image('tmp/partners/index.png') }}"
          alt="Производители">
        <img class="hidden-md" loading="lazy"
          src="{{ Vite::image('tmp/partners/index_mobile.png') }}"
          alt="Производители">
      </div>
    </div>
  </div>

  <div class="process-calculation-bg">

    <!-- 9_process -->
    <div class="process-box" id="process">
      <div class="container">
        <div class="title-row">
          <div class="h2"><b>Как мы</b> работаем</div>
        </div>
        <div class="process-list">
          <div class="process-item">
            <div class="pi-image">
              <span class="pi-int">01</span>
              <img loading="lazy"
                src="{{ Vite::image('general/process/1.png') }}"
                alt="">
            </div>
            <div class="pi-title">Оставляете заявку
            </div>
            <div class="pi-description">После заявки наш менеджер перезвонит Вам
              в течение 30 минут для обсуждения деталей</div>
          </div>
          <div class="process-item">
            <div class="pi-image">
              <span class="pi-int">02</span>
              <img loading="lazy"
                src="{{ Vite::image('general/process/2.png') }}"
                alt="">
            </div>
            <div class="pi-title">Выезд замерщика
            </div>
            <div class="pi-description">Наш специалист бесплатно выезжает на
              объект для составления замеров и объема работ</div>
          </div>
          <div class="process-item">
            <div class="pi-image">
              <span class="pi-int">03</span>
              <img loading="lazy"
                src="{{ Vite::image('general/process/3.png') }}"
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
              <img loading="lazy"
                src="{{ Vite::image('general/process/4.png') }}"
                alt="">
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
                src="{{ Vite::image('general/process/5.png') }}"
                alt="">
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

    <!-- 10_calculation -->
    <div class="calculation-box">
      <div class="container visible-md">
        <img class="rellax absolute calc-green-1" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/calc_green_1.png') }}"
          alt="">
        <img class="rellax absolute calc-green-2" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/calc_green_2.png') }}"
          alt="">
      </div>
      <div class="hidden-md">
        <img class="rellax absolute calc-green-m-1" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/calc_green_1_mobile.png') }}"
          alt="">
        <img class="rellax absolute calc-green-m-2" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/calc_green_2_mobile.png') }}"
          alt="">
      </div>
      <div class="big-container">
        <div class="container grid-with-form grid-md-12">
          <div class="left-col">
            <div class="h2 visible-sm"><b>Получите бесплатный предварительный
                расчет стоимости работ</b> на Вашем объекте</div>
            <div class="h2 hidden-sm"><b>Получите бесплатный предварительный</b>
              расчет стоимости работ</div>
            <div class="sub-h">
              <div class="three-dots"><i></i><i></i><i></i></div>
              <div>Все, что Вам нужно — заполнить форму справа и мы вышлем
                предварительную смету <span class="visible-sm">по Вашей
                  задаче</span></div>
            </div>
          </div>
          <div class="right-col">
            <form class="form-wrapper">
              <div class="form-input">
                <input type="text" placeholder="Введите Ваше имя" required>
              </div>
              <div class="form-input">
                <input type="text" placeholder="+7 (___) ___ - __ - __" phone
                  required>
              </div>
              <div class="form-input">
                <textarea placeholder="Кратко опишите Вашу задачу"></textarea>
              </div>
              <label class="form-file">
                <span class="link">
                  <img class="to-svg" loading="lazy"
                    src="{{ Vite::image('icons/clip.svg') }}" alt="">
                  <input type="file" multiple>
                  <span>Прикрепить ТЗ/фото объекта</span>
                </span>
              </label>
              <button class="btn btn-orange"
                data-popup=".popup-success"><span>Узнать предварительную
                  стоимость</span></button>
              <div class="form-policy">Нажимая на кнопку, вы даёте согласие
                на обработку персональных данных</div>
            </form>
            <div class="down-circle-row hidden-md">
              <div class="down-circle"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <img class="absolute calc-hand" loading="lazy"
            src="{{ Vite::image('general/hanging/calc_hand.png') }}"
            alt="">
        </div>
      </div>
    </div>

  </div>

  <!-- 11_portfolio -->
  <div class="portfolio-box" id="portfolio">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute wood-piece-blur"
          data-rellax-speeddata-rellax-speed="2" loading="lazy"
          src="{{ Vite::image('general/hanging/portfolio_wood_piece_blur.png') }}"
          alt="">
        <img class="rellax absolute wood-piece" data-rellax-speed="1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/portfolio_wood_piece.png') }}"
          alt="">
      </div>

      <div class="title-row">
        <div class="h2"><b>Выполненные</b> проекты</div>
      </div>
      <div class="portfolio-list grid-lg-3 grid-md-2">
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap hover"
            data-popup=".popup-project">
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
          <div class="pi-image img-cover-wrap hover"
            data-popup=".popup-project">
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
          <div class="pi-image img-cover-wrap hover"
            data-popup=".popup-project">
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

  <!-- 12_articles -->
  <div class="articles-box" id="articles">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute article-green-1" data-rellax-speed="2"
          loading="lazy"
          src="{{ Vite::image('general/hanging/articles_green_1.png') }}"
          alt="">
        <img class="rellax absolute article-green-2"
          data-rellax-speeddata-rellax-speed="-2" loading="lazy"
          src="{{ Vite::image('general/hanging/articles_green_2.png') }}"
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

  <!-- 13_measurer -->
  <div class="measurer-box" id="measurer">
    <img class="hidden-md rellax absolute measurer-green-m"
      data-rellax-speed="-2" loading="lazy"
      src="{{ Vite::image('general/hanging/measurer_green_mobile.png') }}"
      alt="">

    <div class="container front-container visible-md">
      <div class="down-circle-row col-full">
        <div class="down-circle down-circle-alt"></div>
      </div>
      <img class="rellax absolute measurer-green" data-rellax-speed="1"
        loading="lazy"
        src="{{ Vite::image('general/hanging/measurer_green.png') }}"
        alt="">
      <img class="rellax absolute home-shaving" data-rellax-speed="2"
        loading="lazy"
        src="{{ Vite::image('general/hanging/home_shaving.png') }}"
        alt="">
    </div>
    <div class="big-container">
      <div class="container grid-with-form grid-md-12">
        <img class="hidden-md rellax absolute home-shaving-m"
          data-rellax-speed="1" loading="lazy"
          src="{{ Vite::image('general/hanging/home_shaving_mobile.png') }}"
          alt="">

        <div class="left-col">
          <div class="h2"><b>Закажите бесплатный выезд замерщика</b>
            на объект</div>
          <div class="sub-h">
            <div class="three-dots"><i></i></div>
            <div>Специалист проведет все замеры, оценит объем и сложность работы
            </div>
          </div>
          <div class="sub-h">
            <div class="three-dots"><i></i></div>
            <div>После оценки объемов и сложности, замерщик просчитает стоимость
              работ</div>
          </div>
        </div>
        <div class="right-col">
          <form class="form-wrapper">
            <div class="title-row">
              <div class="h3"><b>Закажите бесплатный вызов мастера</b></div>
              <div class="sub-h">Заполните форму и мы перезвоним Вам в течение
                30 мин</div>
            </div>
            <div class="form-input">
              <input type="text" placeholder="Введите Ваше имя" required>
            </div>
            <div class="form-input">
              <input type="text" placeholder="+7 (___) ___ - __ - __" phone
                required>
            </div>
            <button class="btn btn-orange"
              data-popup=".popup-success"><span>Заказать бесплатный
                выезд мастера</span></button>
            <div class="form-policy">Нажимая на кнопку, вы даёте согласие
              на обработку персональных данных</div>
          </form>
          <div class="down-circle-row hidden-md">
            <div class="down-circle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container front-container visible-md">
      <img class="rellax absolute home-shaving-blur" data-rellax-speed="1"
        loading="lazy"
        src="{{ Vite::image('general/hanging/home_shaving_blur.png') }}"
        alt="">
    </div>
  </div>

@endsection

