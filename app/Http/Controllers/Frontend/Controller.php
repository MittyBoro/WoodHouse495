<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function replacePageData(
        Page $page,
        Model|string $replaceData,
        string $replaceKey = '%replace%',
    ) {
        $keys2Replace = [
            'meta_title',
            'meta_description',
            'meta_keywords',
            'title',
            'description',
        ];

        foreach ($keys2Replace as $key) {
            if (!$page->{$key}) {
                continue;
            }

            $data = is_string($replaceData)
                ? $replaceData
                : $replaceData->{$key};

            $this->replacePageKey($page, $key, $data, $replaceKey);
        }

        return $page;
    }
    protected function replacePageKey(
        Page $page,
        string $key,
        $data,
        string $replaceKey,
        $replaceIfNot = false,
    ) {
        $pageValue = $page->{$key};

        if ($replaceIfNot && filled($data)) {
            if (strrpos($pageValue, $replaceKey) === false) {
                $page->{$key} = $data;
                return;
            }
        }

        $page->{$key} = str_replace($replaceKey, $data ?? '', $pageValue);
    }
}
