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
            <h1>Новая статья</h1>
          </div>
        </div>
        <div class="format-text article-text">
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae sint
            a nisi error nam temporibus autem nesciunt eaque ab perspiciatis
            obcaecati velit sed, consequatur sequi, illo possimus commodi! Qui,
            in. Quidem numquam ad, quis libero inventore consectetur quam tenetur
            magni maiores labore, praesentium aliquid quas aut officiis! In error
            saepe pariatur voluptatum distinctio odio rerum quam, perspiciatis
            sint mollitia quo facere labore soluta. Aliquam odit, dolorem
            laboriosam pariatur consequatur vitae nulla illum reprehenderit eaque
            voluptatibus doloribus molestiae obcaecati? Non placeat qui neque
            earum. Dolores laboriosam tempora, voluptate voluptatibus nesciunt
            enim architecto excepturi explicabo in numquam aut quia, illum officia
            molestiae!
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Exercitationem nulla, iusto beatae pariatur in distinctio eligendi
            vero excepturi ducimus soluta rerum id perferendis assumenda
            voluptates amet. Animi sunt aliquam repudiandae quaerat natus placeat,
            doloremque perferendis eos molestias quis, laborum omnis suscipit non
            explicabo obcaecati dignissimos corporis! Officiis est, vel dicta
            officia, nulla ratione eaque, praesentium molestiae quia eligendi
            fugiat dignissimos aliquid fuga et numquam vero a optio pariatur
            cupiditate cum. Perspiciatis, repudiandae, rerum nisi, alias ab facere
            distinctio fugit voluptates nam eaque omnis! Repellendus rerum iusto
            error! Adipisci, beatae sunt?
          </p>
          <ul>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut modi
              optio harum obcaecati possimus nostrum. Suscipit consequuntur totam
              deserunt corporis fugit quibusdam atque deleniti hic tempore. Minima
              id eum corporis?
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut modi
              optio harum obcaecati possimus nostrum. Suscipit consequuntur totam
              deserunt corporis fugit quibusdam atque deleniti hic tempore. Minima
              id eum corporis?
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut modi
              optio harum obcaecati possimus nostrum. Suscipit consequuntur totam
              deserunt corporis fugit quibusdam atque deleniti hic tempore. Minima
              id eum corporis?
            </li>
          </ul>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Exercitationem nulla, iusto beatae pariatur in distinctio eligendi
            vero excepturi ducimus soluta rerum id perferendis assumenda
            voluptates amet. Animi sunt aliquam repudiandae quaerat natus placeat,
            doloremque perferendis eos molestias quis, laborum omnis suscipit non
            explicabo obcaecati dignissimos corporis! Officiis est, vel dicta
            officia, nulla ratione eaque, praesentium molestiae quia eligendi
            fugiat dignissimos aliquid fuga et numquam vero a optio pariatur
            cupiditate cum. Perspiciatis, repudiandae, rerum nisi, alias ab facere
            distinctio fugit voluptates nam eaque omnis! Repellendus rerum iusto
            error! Adipisci, beatae sunt?
          </p>
        </div>
      </div>
    </div>
  </div>

@endsection

