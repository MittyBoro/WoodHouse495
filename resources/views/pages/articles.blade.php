@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('menu_items')
  <a class="menu-item visible-lg" href="/sanding">Шлифовка дома</a>
  <a class="menu-item visible-lg" href="/painting">Покраска дома</a>
  <a class="menu-item visible-lg" href="/roofing">Кровельные работы</a>
  <a class="menu-item visible-lg" href="/reconstruction">Реконструкция домов</a>
@endsection

@section('content')

  <!-- 12_articles -->
  <div class="articles-box list-articles-box" id="articles">
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
        @foreach ($articles as $article)
          @include('elements.article')
        @endforeach
      </div>

      @if ($articles->hasPages())
        <div class="articles-btn">
          {{ $articles->links('elements.pagination') }}
        </div>
      @endif
    </div>
  </div>

@endsection

