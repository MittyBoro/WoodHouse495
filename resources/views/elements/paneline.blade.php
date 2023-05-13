<div class="topanel">
  <div class="container">
    <a href="{{ route('panel.dashboard') }}" target="_blank">Панель управления</a>

    @isset($product['id'])
      <a href="{{ route('panel.roducts.edit', $product->id) }}"
        target="_blank">Редактировать товар</a>
    @endisset
    @if (isset($category_id))
      <a href="{{ route('panel.roduct_categories.edit', $category_id) }}"
        target="_blank">Редактировать категорию</a>
    @endif

    @isset($page['id'])
      <a href="{{ route('panel.ages.edit', $page->id) }}"
        target="_blank">Редактировать страницу</a>
    @endisset
  </div>
</div>

<style>
  .topanel {
    background: #333;
    width: 100%;
    padding: 11px 20px;
  }

  .topanel .container {
    display: flex;
    align-items: center;
  }

  .topanel a {
    margin-left: 15px;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    text-align: right;
  }

  .topanel a:first-child {
    margin-left: 0;
    margin-right: auto;
    padding-right: 15px;
    text-align: left;
  }

  .topanel a:hover {
    text-decoration: underline;
  }
</style>

