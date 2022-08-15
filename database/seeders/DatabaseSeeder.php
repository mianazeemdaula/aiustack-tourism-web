<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\State;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\AttractionPoint;
use App\Models\Comment;
use App\Models\Reaction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Country::factory(10)->has(State::factory()->count(3))->create();
        Tour::factory(50)->create();
        Hotel::factory(20)->create();
        AttractionPoint::factory(50)->create();
        Comment::factory(100)->create();
        Reaction::factory(500)->create();
        // \App\Models\Country::hasStates()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
