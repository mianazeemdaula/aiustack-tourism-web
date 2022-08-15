<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country(),
            'iso_code' => $this->faker->countryCode,
            'dial_code' => $this->faker->areaCode,
            'lang' => $this->faker->languageCode,
        ];
    }
}
