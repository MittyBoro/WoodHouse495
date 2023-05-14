<?php

namespace Database\Factories;

use App\Models\Panel\Portfolio;
use App\Models\Panel\Page;

class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(2, 3)),
            'mini_description' => $this->faker->text(30),
            'description' => $this->faker->text(),
            'location' => $this->faker->sentence(rand(2, 3)),
            'is_published' => !!rand(0, 5),
            'page_id' => rand(0, 3) ? Page::inRandomOrder()->first()->id : null,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Portfolio $portfolio) {
            if ($portfolio->is_published) {
                $data = [
                    'gallery' => $this->getGallery(rand(2, 3)),
                ];
                $portfolio->saveAfter($data);
            }
        });
    }
}
