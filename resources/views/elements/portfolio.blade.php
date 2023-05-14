<div class="portfolio-item"
  onclick='portfolioPopup(@json($portfolio))'>
  <div class="pi-image img-cover-wrap hover">
    <div class="link orange show-more">Подробнее <img class="to-svg" loading="lazy"
        src="{{ Vite::image('icons/link-arrow.svg') }}" alt=""></div>
    <img loading="lazy" src="{{ $portfolio['thumb'] }}" alt="">
  </div>
  <div class="pi-title">{{ $portfolio['title'] }}</div>
  <div class="pi-descrition">{!! $portfolio['mini_description'] !!}</div>
  <div class="pi-link link">Посмотреть подробнее <img class="to-svg"
      loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
      alt="">
  </div>
</div>

