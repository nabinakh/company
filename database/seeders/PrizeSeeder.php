<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $prizes = [
            [
                'prize_code' => '711',
                'title' => 'Buoni GenAgricola',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '712',
                'title' => 'Buoni Amazon',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '713',
                'title' => 'Buoni endered',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '714',
                'title' => 'Buoni benzina',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '715',
                'title' => 'AirSafe',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '716',
                'title' => 'Tata Pad',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '717',
                'title' => 'Smartwatch',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '718',
                'title' => 'Buoni GenAgricola',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '719',
                'title' => 'Buoni Amazon',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '720',
                'title' => 'Buoni endered',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '721',
                'title' => 'Buoni benzina',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '722',
                'title' => 'AirSafe',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '723',
                'title' => 'Tata Pad',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '724',
                'title' => 'Smartwatch',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '725',
                'title' => 'Buoni GenAgricola',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '726',
                'title' => 'Buoni Amazon',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '727',
                'title' => 'Buoni endered',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '728',
                'title' => 'Buoni benzina',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '729',
                'title' => 'AirSafe',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '730',
                'title' => 'Tata Pad',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '731',
                'title' => 'Smartwatch',
                'group_type' => 'fusion',
            ]
            ];
            foreach ($prizes as $prize) {
                Prize::create($prize);
            }
        }
    
}
