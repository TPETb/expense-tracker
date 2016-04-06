<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'code' => 'USD',
            'name' => 'US Dollar',
            'symbol' => '$',
            'from_usd_exchange_rate' => 1
        ]);
    }
}
