<?php

namespace Database\Seeders;

use App\Models\AgencyGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgencyGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'title' => 'Gruppo Gourmet ',
                'group_code' => 'gourmet',
            ],
            [
                'title' => 'Gruppo Nouvelle Cuisine ',
                'group_code' => 'nouvelle_cuisine',
            ],
            [
                'title' => 'Gruppo Fusion',
                'group_code' => 'fusion',
            ]
        ];

        foreach ($groups as $group) {
            AgencyGroup::create($group);
        }
    }
}
