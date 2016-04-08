<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CurrencyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSeedWasBooted()
    {
        $this->seeInDatabase('currencies', ['code' => 'USD']);
    }

    public function testCRUD()
    {
        // Create
        $currency = new \App\Currency([
            'code' => "BYR",
            'name' => "Belarussian Ruble",
            'symbol' => 'B',
            'from_usd_exchange_rate' => 20000]);
        $currency->save();

        $this->seeInDatabase('currencies', ['code' => 'BYR']);

        // Read
        $currency = \App\Currency::where('code', 'BYR')->first();

        $this->assertTrue($currency->code === 'BYR');

        // Update
        $currency->from_usd_exchange_rate = 40000;
        $currency->save();

        $currency = \App\Currency::where('code', 'BYR')->first();

        $this->assertTrue($currency->from_usd_exchange_rate == 40000);

        // Delete
        $currency->delete();

        $currency = \App\Currency::where('code', 'BYR')->first();
        $this->assertNull($currency);
    }


}
