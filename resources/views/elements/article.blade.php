<a class="articles-item" href="{{ route('article', $article->slug) }}">
  <div class="ai-image img-cover-wrap hover">
    <div class="link orange show-more">Подробнее <img class="to-svg" loading="lazy"
        src="{{ Vite::image('icons/link-arrow.svg') }}" alt=""></div>
    <img loading="lazy" src="{{ $article->thumb }}" alt="">
  </div>
  <div class="ai-bottom">
    <div class="ai-title">{{ $article->title }}</div>
    <div class="ai-description">{!! $article->mini_description !!}</div>
    <div class="ai-link link">Читать подробнее <img class="to-svg"
        loading="lazy" src="{{ Vite::image('icons/link-arrow.svg') }}"
        alt=""></div>
  </div>
</a>

