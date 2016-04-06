<?php

use Illuminate\Database\Seeder;

class ExpenseTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expense_tags')->insert([
            'name' => 'Household',
            'icon' => '/img/icon/household.png',
        ]);
        DB::table('expense_tags')->insert([
            'name' => 'Grocery',
            'icon' => '/img/icon/grocery.png',
        ]);
        DB::table('expense_tags')->insert([
            'name' => 'Entertainment',
            'icon' => '/img/icon/entertainment.png',
        ]);
    }
}
