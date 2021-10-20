<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
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
            'name' => 'MTN MOMO GHS',
            'image' => '/currencies/mtn.png',
            'is_crypto' =>false,
        ]);

        DB::table('currencies')->insert([
            'name' => 'AirtelTigo Money GHS',
            'image' => '/currencies/airteltigo.png',
            'is_crypto' =>false,
        ]);

        DB::table('currencies')->insert([
            'name' => 'Vodafone Cash GHS',
            'image' => '/currencies/vodafone.png',
            'is_crypto' =>false,
        ]);

       

        DB::table('currencies')->insert([
            'name' => 'BitCoin-BTC USD',
            'image' => '/currencies/bitcoin.png',
            'is_crypto' =>true,
        ]);

         DB::table('currencies')->insert([
            'name' => 'Ethereum-ETH USD',
            'image' => '/currencies/euthereum.png',
            'is_crypto' =>true,
        ]);
    }
}