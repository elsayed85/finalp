<?php

use App\Jobs\SendPositionJob;
use Illuminate\Database\Seeder;

class simulateCarMovemntsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            ['lat' => '31.043084529096628', 'lng' => '31.35235957295868'],
            ['lat' => '31.042714833483775', 'lng' => '31.35233026384487'],
            ['lat' => '31.042425112515186', 'lng' => '31.352302673177288'],
            ['lat' => '31.042188186433155', 'lng' => '31.35226115266111'],
            ['lat' => '31.0419528099172', 'lng' => '31.35222036270642'],
            ['lat' => '31.04182679242304', 'lng' => '31.352224034163832'],
        ];
        $now = now();
        foreach ($positions as $position) {
            dispatch(new SendPositionJob($position))->delay($now->addSeconds(15));
        }
    }
}
