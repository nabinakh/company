<?php

namespace Database\Seeders;

use App\Models\GameCredit;
use App\Models\Participant;
use App\Models\Phase;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(5)->create()->each(function ($user) {
            $user->participant()->save(Participant::factory()->make());
        });
        $user->each(function ($user) {
            $user->game_credits()->save(GameCredit::factory()->make());
        });
    }
}
