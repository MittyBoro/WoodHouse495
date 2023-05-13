@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('content')

  <!-- 1_home -->
  <div class="home-box reconstruction-home-box">
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
        <h1 class="h1"><b>Реконструкция и достройка домов</b> в Москве и МО
        </h1>
        <div class="sub-h sub-h-alt">
          Реконструкция дома позволяет полностью или частично перестроить дом,
          добавить какие-то функциональные элементы, расширить или уменьшить его
          габариты
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

  <!-- 11_portfolio -->
  <div class="portfolio-box reconstruction-portfolio-box" id="portfolio">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute reco-green-left" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/cost_green_left.png') }}"
          alt="">
        <img class="rellax absolute reco-green-right" data-rellax-speed="-1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/castlle_green.png') }}"
          alt="">
        <img class="rellax absolute reco-device" data-rellax-speed="1"
          loading="lazy"
          src="{{ Vite::image('general/hanging/castlle_device.png') }}"
          alt="">
      </div>
      <div class="title-row">
        <div class="h2"><b>Работаем со всеми</b><br>типами домов</div>
      </div>
      <div class="portfolio-list grid-lg-3 grid-md-2">
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap">
            <img loading="lazy"
              src="{{ Vite::image('tmp/reconstruction_types/1.png') }}"
              alt="">
          </div>
          <div class="pi-title">Каркасные</div>
          <div class="pi-descrition format-text">
            <ul>
              <li>рамная конструкция с перекрытиями</li>
              <li>каркас с неразрезными стойками</li>
              <li>стоечно-балочная конструкция</li>
              <li>каркасно-стоечная конструкция</li>
            </ul>
          </div>
        </div>
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap">
            <img loading="lazy"
              src="{{ Vite::image('tmp/reconstruction_types/2.png') }}"
              alt="">
          </div>
          <div class="pi-title">Деревянные</div>
          <div class="pi-descrition format-text">
            <ul>
              <li>из клееного бруса</li>
              <li>из оцилиндрованного бревна</li>
              <li>утепленные дома из простого бруса</li>
              <li>комбинированные дома</li>
            </ul>
          </div>
        </div>
        <div class="portfolio-item">
          <div class="pi-image img-cover-wrap">
            <img loading="lazy"
              src="{{ Vite::image('tmp/reconstruction_types/3.png') }}"
              alt="">
          </div>
          <div class="pi-title">Каменные</div>
          <div class="pi-descrition format-text">
            <ul>
              <li>из кирпича и блоков всех типов</li>
              <li>из пенобетона и газосиликата</li>
              <li>из керамических блоков</li>
              <li>монолитные и комбинированные</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 4_skills -->
  <div class="skills-box reconstruction-skills-box" id="skills">
    <div class="container">
      <div class="title-row">
        <div class="h2"><b>Превратим Ваш дом</b> в замок!</div>
        <div class="sub-h">Профессиональные мастера-отделочники выполнят любую
          работу, которая связанная со строительством и отделкой деревянных домов
        </div>
      </div>
      <div class="sign-list">
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Замена кровли</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Замена пола</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж перегородок</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Замена окон</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Монтаж дверей</div>
        </div>
        <div class="sign-item">
          <div class="sign-circle"></div>
          <div class="sign-line"></div>
          <div class="sign-text">Ремонт стен</div>
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

  <!-- 11_portfolio -->
  <div
    class="portfolio-box alt-portfolio-box reconstruction-second-portfolio-box"
    id="portfolio">
    <div class="container">
      <div class="title-row">
        <div class="h2"><b>Примеры</b> работ</div>
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
        <div class="btn btn-orange btn-instagram">
          <span>
            <img loading="lazy"
              src="{{ Vite::image('icons/instagram-btn.svg') }}"
              alt="">
            Подписывайтесь на нас
          </span>
        </div>
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
        <a class="btn btn-orange" href="#measurer"><span>Бесплатно вызвать
            замерщика</span></a>
      </div>
    </div>
  </div>

  <!-- 8_partners -->
  <div class="partners-box">
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
        <img loading="lazy" src="{{ Vite::image('tmp/partners/roofing.png') }}"
          alt="Производители">
      </div>
      <div class="partners-image hidden-md">
        <img loading="lazy"
          src="{{ Vite::image('tmp/partners/roofing_mobile.png') }}"
          alt="Производители">
      </div>
    </div>
  </div>

  <!-- 16_price -->
  <div class="price-box reconstruction-price-box">
    <div class="container">

      <div class="price-discount visible-xxl">
        <img class="back-green" loading="lazy"
          src="{{ Vite::image('backgrounds/price_discount.png') }}"
          alt="">
        <p>Скидки при больших объемах работ <b>от 5% до 10%</b></p>
      </div>

      <div class="title-row">
        <div class="h2"><b>Актуальный прайс</b><br> по реконструкции дома
        </div>
      </div>
      <div class="price-table">
        <table>
          <tbody>
            <tr>
              <td>Разборка старой кровли</td>
              <td>от 350 р м²</td>
            </tr>
            <tr>
              <td>Демонтаж существующей обрешётки</td>
              <td>от 100 р м²</td>
            </tr>
            <tr>
              <td>Укрепление стропильной системы</td>
              <td>от 650 р м²</td>
            </tr>
            <tr>
              <td>Переделка каркаса фронтонов</td>
              <td>от 850 р м²</td>
            </tr>
            <tr>
              <td>Демонтаж водосточной системы</td>
              <td>от 150 р м.п.</td>
            </tr>
            <tr>
              <td>Демонтаж отделки стен</td>
              <td>от 350 р м²</td>
            </tr>
            <tr>
              <td>Монтаж и отделка карнизов софитами</td>
              <td>от 650 р м²</td>
            </tr>
            <tr>
              <td>Утепление дома базальтовой ватой</td>
              <td>от 150 р м²</td>
            </tr>
            <tr>
              <td>Монтаж защитной мембраны (ветро-влаго защита)</td>
              <td>от 70 р м²</td>
            </tr>
            <tr>
              <td>Монтаж вентиляционной обрешётки по стенам из бруска</td>
              <td>от 150 р м²</td>
            </tr>
            <tr>
              <td>Изготовление навесной обрешётки по стропилам из доски</td>
              <td>от 150 р м²</td>
            </tr>
            <tr>
              <td>Монтаж винилового сайдинга</td>
              <td>от 450 р м²</td>
            </tr>
            <tr>
              <td>Монтаж ветрозащитной плиты изоплат по наружным стенам</td>
              <td>от 250 р м²</td>
            </tr>
            <tr>
              <td>Монтаж имитации бруса по готовому основанию</td>
              <td>от 450 р м²</td>
            </tr>
            <tr>
              <td>Покраска доски и имитации в 1 слой</td>
              <td>от 100 р м²</td>
            </tr>
            <tr>
              <td>Отделка цоколя с устройством обрешётки из профиля</td>
              <td>от 850 р м²</td>
            </tr>
            <tr>
              <td>Установка металлического отлива по цоколю</td>
              <td>от 150 р м²</td>
            </tr>
            <tr>
              <td>Монтаж кровли из металлочерепицы по готовому основанию</td>
              <td>от 500 р м²</td>
            </tr>
            <tr>
              <td>Монтаж конька, карнизных и торцевых планок на крыше</td>
              <td>от 200 р м.п.</td>
            </tr>
            <tr>
              <td>Отделка окон готовым наличником</td>
              <td>от 350 р м²</td>
            </tr>
            <tr>
              <td>Монтаж отлива на окно с герметизацией</td>
              <td>от 150 р м.п.</td>
            </tr>
            <tr>
              <td>Изготовление полов с утеплением (сборка полного пирога)</td>
              <td>от 1200 р м²</td>
            </tr>
            <tr>
              <td>Сборка каркаса стен и перегородок без чистовой отделки</td>
              <td>от 850 р м²</td>
            </tr>
            <tr>
              <td>Обработка доски и бруса антисептиком перед установкой</td>
              <td>от 50 р м²</td>
            </tr>
            <tr>
              <td>Монтаж снегозадержателя на крыше</td>
              <td>от 350 р м.п.</td>
            </tr>
            <tr>
              <td>Установка желоба (пластик и металл)</td>
              <td>от 450 р м.п.</td>
            </tr>
            <tr>
              <td>Монтаж водосточной трубы (пластик и металл)</td>
              <td>от 450 р м.п.</td>
            </tr>
            <tr>
              <td>Монтаж металлической входной двери</td>
              <td>от 3500 р шт</td>
            </tr>
            <tr>
              <td>Установка пластикового окна среднего размера</td>
              <td>от 3000 р шт</td>
            </tr>
            <tr>
              <td>Сборка и разборка строительных лесов из обрезной доски</td>
              <td>от 200 р м.п.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="gray-line"></div>
  </div>

  <!-- 2_about -->
  <div class="about-box alt-about reconstruction-about-box">
    <img class="hidden-md rellax absolute right-green" data-rellax-speed="1"
      loading="lazy"
      src="{{ Vite::image('general/hanging/about_green_mobile.png') }}"
      alt="">
    <div class="container grid-2">
      <div class="left-col">
        <div class="h2"><b>Пришло время</b> перестроить!</div>
        <div class="sub-h">
          Одним из главных направлений деятельности у компании Woodhouse495
          является реконструкция и реставрация как деревянных, так и кирпичных и
          каменных домов.
        </div>
        <div class="text-item format-text text-to-hide text-to-hide-alt">
          <p>Во время нашей первой встречи мы вместе с Вами делаем анализ
            имеющегося дома и договариваемся о том, что мы будем изменять. Вы со
            своей стороны скажете все пожелания, а мы предоставим информацию о
            том, как это сделать максимально профессионально.</p>
          <p class="green">Мы готовы оказать полный спектр услуг по:</p>
          <p>- <b>пристройкам</b>: терраса, веранда, дополнительное помещение
            (баня, гараж, летняя кухня и многое другое), балкон;</p>
          <p>- <b>достройке</b>, в том числе достройка этажа;</p>
          <p>- <b>утепление</b> (снаружи, внутри, утепление перегородок, отдельно
            мансарды, перекрытий);</p>
          <p>- наружная и внутренняя <b>отделка</b>;</p>
          <p>- <b>перепланировка</b> внутри строения;</p>
          <p>- <b>замена</b> кровельного покрытия.</p>
          <p>На этом спектр оказываемых нами услуг по достройке и реконструкции
            дома не ограничивается. Вы всегда можете позвонить нам и узнать
            стоимость и возможность выполнения тех или иных работ, а мы с радостью
            вам в этом поможем.</p>
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
  <div class="articles-box alt-articles-box">
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
        <div class="articles-item">
          <div class="ai-image img-cover-wrap hover">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/articles/1.png') }}"
              alt="">
          </div>
          <div class="ai-bottom">
            <div class="ai-title">Окосячка деревянного дома</div>
            <div class="ai-description">Окосячка проемов в деревянном доме в
              колоду на сегодняшний день является самым трудоемким и сложным
              процессом среди всех вариантов...</div>
            <div class="ai-link link">Читать подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
          </div>
        </div>
        <div class="articles-item">
          <div class="ai-image img-cover-wrap hover">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/articles/2.png') }}"
              alt="">
          </div>
          <div class="ai-bottom">
            <div class="ai-title">Шливофка деревянного дома</div>
            <div class="ai-description">Шлифовка деревянного дома
              Выполним шлифовку деревянного дома от специалистов с многолетним
              опытом работ...</div>
            <div class="ai-link link">Читать подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
          </div>
        </div>
        <div class="articles-item">
          <div class="ai-image img-cover-wrap hover">
            <div class="link orange show-more">Подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
            <img loading="lazy" src="{{ Vite::image('tmp/articles/3.png') }}"
              alt="">
          </div>
          <div class="ai-bottom">
            <div class="ai-title">Утепление
              каркасного дома</div>
            <div class="ai-description">Если вы не в первый раз сталкиваетесь с
              темой строительства, то знаете, что правильный выбор утеплителя
              является ключевым пунктом...</div>
            <div class="ai-link link">Читать подробнее <img class="to-svg"
                loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
                alt=""></div>
          </div>
        </div>
      </div>
      <div class="articles-btn">
        <div class="btn btn-orange btn-alt"><span>Посмотреть еще</span></div>
      </div>
    </div>
  </div>

@endsection

