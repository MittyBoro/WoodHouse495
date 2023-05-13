@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('content')

  <!-- 12_articles -->
  <div class="articles-box list-articles-box">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute article-green-1" data-rellax-speed="2"
          loading="lazy"
          src="{{ Vite::image('general/hanging/articles_green_1.png') }}"
          alt="">
      </div>
      <div class="title-row">
        <div class="h1"><b>Последние</b> статьи</div>
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
        <ul class="pagination">
          <li class="prev disabled">
            <a href=""><span>« Назад</span></a>
          </li>
          <li class="active page-1"><a href="?p=1">1</a></li>
          <li class="page-2"><a href="?p=2">2</a></li>
          <li class="page-3"><a href="?p=3">3</a></li>
          <li class="page-4"><a href="?p=4">4</a></li>
          <li class="next">
            <a href="?p=2"><span>Далее »</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

@endsection

