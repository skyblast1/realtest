<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\state>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = State::class;

    public function definition()
    {
        return [
            'likes' => $this->faker->numberBetween(1, 20),
            'views' => $this->faker->numberBetween(21, 100)
        ];
    }
}
