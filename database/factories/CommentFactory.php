<?php

namespace Database\Factories;

use App\Models\AttractionPoint;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $commentable = $this->commentable();
        return [
            'body' => $this->faker->realText(rand(10, 20)),
            'user_id' => $this->faker->numberBetween(1, 10),
            'commentable_id' =>  $this->faker->numberBetween(1, 50),
            'commentable_type' => $commentable,
        ];
    }

    public function commentable()
    {
        return $this->faker->randomElement([
            AttractionPoint::class,
            Tour::class,
        ]);
    }
}
