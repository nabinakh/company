<?php

namespace Database\Seeders;

use App\Models\PrizeList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrizeList::truncate();
        $prizes = [
            [
                'prize_code' => '739',
                'title' => 'Buoni GenAgricola',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '740',
                'title' => 'Buoni Amazon',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '741',
                'title' => 'Buoni endered',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '742',
                'title' => 'Buoni benzina',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '743',
                'title' => 'AirSafe',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '744',
                'title' => 'Tata Pad',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '745',
                'title' => 'Smartwatch',
                'group_type' => 'gourmet',
            ],
            [
                'prize_code' => '746',
                'title' => 'Buoni GenAgricola',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '747',
                'title' => 'Buoni Amazon',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '748',
                'title' => 'Buoni Endered',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '749',
                'title' => 'Buoni Benzina',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '750',
                'title' => 'AirSafe',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '751',
                'title' => 'Tata Pad',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '752',
                'title' => 'Smartwatch',
                'group_type' => 'nouvelle_cuisine',
            ],
            [
                'prize_code' => '753',
                'title' => 'Buoni GenAgricola',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '754',
                'title' => 'Buoni Amazon',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '755',
                'title' => 'Buoni Endered',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '756',
                'title' => 'Buoni Benzina',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '757',
                'title' => 'AirSafe',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '758',
                'title' => 'Tata Pad',
                'group_type' => 'fusion',
            ],
            [
                'prize_code' => '759',
                'title' => 'Smartwatch',
                'group_type' => 'fusion',
            ]
            ];
            foreach ($prizes as $prize) {
                PrizeList::create($prize);
            }
        }
}
