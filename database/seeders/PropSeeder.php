<?php

namespace Database\Seeders;

use App\Models\Panel\Prop;
use Illuminate\Database\Seeder;

class PropSeeder extends Seeder
{
    public function run()
    {
        $props = $this->getData();

        foreach ($props as $prop) {
            Prop::create($prop);
        }
    }

    private function getData()
    {
        $pages = [
            [
                'tab' => Prop::DEFAULT_TAB,
                'type' => 'text',
                'title' => 'Код перед </head>',
                'key' => 'head_end_code',
            ],
            [
                'tab' => Prop::DEFAULT_TAB,
                'type' => 'text',
                'title' => 'Код перед </body>',
                'key' => 'body_end_code',
            ],
        ];

        return $pages;
    }
}
