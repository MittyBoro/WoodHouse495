<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory as MainFactory;
use Illuminate\Support\Arr;

abstract class Factory extends MainFactory
{
    protected function getGallery($count)
    {
        $gallery = [];
        foreach (range(0, $count) as $v) {
            $gallery[] = [
                'url' =>
                    'https://dummyimage.com/1920x1080/' .
                    str_pad(
                        dechex(mt_rand(0, 0xffffff)),
                        6,
                        '0',
                        STR_PAD_LEFT,
                    ) .
                    '/fff',
            ];
        }
        return $gallery;
    }
}
