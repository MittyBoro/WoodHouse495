<?php

namespace App\View\Composers;

use App\Models\Prop;
use Illuminate\View\View;

class FrontComposer
{
    private $view;

    public function compose(View $view)
    {
        $this->view = $view;

        $this->setLayoutValues();
        $this->setViewName();
    }

    private function setLayoutValues()
    {
        $props = Prop::getByKeys(['body_end_code', 'head_end_code']);

        $this->view->with([
            'props' => $props->toArray(),
            'currentUrl' => url()->current(),
        ]);
    }

    private function setViewName()
    {
        $view_array = explode('.', $this->view->getName());
        $viewName = end($view_array);

        $this->view->with([
            'viewName' => $viewName,
        ]);
    }
}
