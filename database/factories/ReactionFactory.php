<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AttractionPoint;
use App\Models\Tour;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reaction>
 */
class ReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reaction' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 10),
            'reactionable_id' =>  $this->faker->numberBetween(1, 50),
            'reactionable_type' => $this->faker->randomElement([
                AttractionPoint::class,
                Tour::class,
            ]),
        ];
    }
}
