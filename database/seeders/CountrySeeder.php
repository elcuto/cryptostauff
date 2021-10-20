<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('countries')->insert([
            'name' => 'Ghana',
            'initial' => 'GH',
            'currency' =>'GHS',
        ]);
    }
}