<?php

namespace App\View\Composers;

use App\Models\Article;
use App\Models\Prop;
use Illuminate\View\View;

class FrontComposer
{
    private $view;

    public function compose(View $view)
    {
        $this->view = $view;

        $view_array = explode('.', $this->view->getName());
        $viewName = end($view_array);

        $this->view->with([
            'viewName' => $viewName,
        ]);

        if (!in_array($viewName, ['default', 'articles', 'single-article'])) {
            $this->setArticles();
        }
        $this->setLayoutValues();
    }

    private function setArticles()
    {
        $articles = Article::limit(3)->getFrontList(false);

        $this->view->with([
            'articles' => $articles,
        ]);
    }

    private function setLayoutValues()
    {
        $props = Prop::getByKeys(['body_end_code', 'head_end_code']);

        $this->view->with([
            'props' => $props->toArray(),
            'currentUrl' => url()->current(),
        ]);
    }
}
