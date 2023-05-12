<?php

namespace Database\Factories;

use App\Models\Panel\Article;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(2, 3)),
            'slug' => $this->faker->sentence(rand(2, 3)),
            'mini_description' => $this->faker->text(30),
            'description' => $this->faker->text(),
            'is_published' => !!rand(0, 3),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Article $article) {
            $data = [
                'gallery' => $this->getGallery(rand(0, 2)),
            ];

            $article->saveAfter($data);
        });
    }
}
