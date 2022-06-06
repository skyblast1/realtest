<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   protected $model = Article::class;

    public function definition()
    {
        $title = $this->faker->sentence(6,true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/','-', $title )),0,-1);

        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => 'https://imgholder.ru/300x300/8493a8/adb9ca.jpg&text=Laravel+9.13*&font=kelson',
            'created_at' => $this->faker->dateTimeBetween('-1 years')
        ];
    }
}
