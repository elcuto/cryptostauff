<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('currencies')->insert([
            'send_currency' => 1,
            'receive_currency' => 4,
            'rate' =>6.2,
            'country_id' => 1
        ]);

        DB::table('currencies')->insert([
            'send_currency' => 1,
            'receive_currency' => 4,
            'rate' =>6.2,
            'country_id' => 1
        ]);
    }
}