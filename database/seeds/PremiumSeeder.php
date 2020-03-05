<?php

use Illuminate\Database\Seeder;

class PremiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premia')->insert([
            'min_cc' =>'0',
            'max_cc'=>'150',
            'amount' => '1500',
        ]);
        DB::table('premia')->insert([
            'min_cc' =>'151',
            'max_cc'=>'250',
            'amount' => '1700',
        ]);
        DB::table('premia')->insert([
            'min_cc' =>'251',
            'max_cc'=>'350',
            'amount' => '1900',
        ]);
        DB::table('premia')->insert([
            'min_cc' =>'351',
            'max_cc'=>'450',
            'amount' => '2100',
        ]);

    }
}
