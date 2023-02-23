<?php

namespace Database\Seeders;

use App\Models\Phase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phases = [
            [
                'title' => "Phase I",
            ],
            [
                'title' => "Phase II",
            ],
            [
                'title' => 'Phase III',
            ],
            [
                'title' => 'Phase IV',
            ],
        ];

        foreach ($phases as $phase) {
            Phase::create($phase);
        }
    }
}
