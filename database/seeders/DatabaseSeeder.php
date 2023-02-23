<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AdminSeeder::class,
            PhaseSeeder::class,
            AgencyGroupSeeder::class,
            PrizeListSeeder::class,
        ]);
        if(config('app.env') === 'local' || config('app.env') === 'nightly') {
            $this->call([
                ParticipantSeeder::class,
            ]);
        }

    }
}
