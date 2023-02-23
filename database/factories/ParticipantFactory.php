<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_id = User::inRandomOrder()->first()->id;
        return [
            'agency_code' => $this->faker->name(),
            'agency_name' => $this->faker->name(),
            'user_id' => $user_id,
            'group_type' => "fusion"
        ];
    }
}
