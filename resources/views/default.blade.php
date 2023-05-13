@extends('layouts.main')

@section('meta_title', $page['meta_title'] ?? '')
@section('meta_description', $page['meta_description'] ?? '')
@section('meta_keywords', $page['meta_keywords'] ?? '')

@section('content')

  <div class="articles-box single-article-box">
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
            <h1>{{ $page['title'] }}</h1>
          </div>
        </div>
        <div class="format-text article-text">
          {!! $page['description'] !!}
        </div>
      </div>
    </div>
  </div>

@endsection

