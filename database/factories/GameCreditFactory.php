<?php

namespace Database\Factories;

use App\Models\Phase;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameCredit>
 */
class GameCreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'game_credits' => $this->faker->numberBetween(0, 100),
            'no_of_game_played' => $this->faker->numberBetween(0, 100),
            'no_of_game_won' => $this->faker->numberBetween(0, 100),
            'phase_id' => Phase::inRandomOrder()->first()->id,
        ];
    }
}
