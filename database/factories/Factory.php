<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory as MainFactory;
use Illuminate\Support\Arr;

abstract class Factory extends MainFactory
{
    protected function getGallery($count)
    {
        // return [];
        return array_fill(
            0,
            $count,
            // https://lorem.space/
            // [ 'url' => 'https://api.lorem.space/image/fashion?w=500&h=500' ]
            ['url' => 'https://picsum.photos/600/600']
        );
    }
}
