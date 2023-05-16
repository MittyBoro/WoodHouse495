@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')
@section('meta_image', $article['thumb'] ?? '')
@section('meta_type', 'article')

@section('menu_items')
  <a class="menu-item visible-lg" href="/sanding">Шлифовка дома</a>
  <a class="menu-item visible-lg" href="/painting">Покраска дома</a>
  <a class="menu-item visible-lg" href="/roofing">Кровельные работы</a>
  <a class="menu-item visible-lg" href="/reconstruction">Реконструкция домов</a>
@endsection

@section('content')

  <div class="articles-box single-article-box" id="articles">
    <div class="container">
      <div class="visible-md">
        <img class="rellax absolute article-green-1" data-rellax-speed="2"
          loading="lazy"
          src="{{ Vite::image('general/hanging/articles_green_1.png') }}"
          alt="" />
      </div>
      <div class="content-wrap">
        <div class="title-row">
          <div class="h2">
            <h1>{{ $article->title }}</h1>
          </div>
        </div>
        <div class="format-text article-text">
          {!! $article->description !!}
        </div>
      </div>
    </div>
  </div>

  <!-- 12_articles -->
  <div class="articles-box alt-articles-box similar-articles-box">
    <div class="container">
      <div class="title-row">
        <div class="h2"><span><b>Похожие</b> статьи</span></div>
      </div>
      <div class="articles-list flex-list">
        @foreach ($articles as $article)
          @include('elements.article')
        @endforeach
      </div>
      <div class="articles-btn">
        <a class="btn btn-orange btn-alt" href="/articles">
          <span>Посмотреть все</span>
        </a>
      </div>
    </div>
  </div>

@endsection

