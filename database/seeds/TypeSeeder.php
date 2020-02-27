<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*Bike Models*/
        DB::table('types')->insert([
            'brand_id'=>'1',
            'name' => 'Pulsar'
        ]);

        DB::table('types')->insert([
            'brand_id'=>'1',
            'name' => 'Avenger'
        ]);

        DB::table('types')->insert([
            'brand_id'=>'2',
            'name' => 'FZ'
        ]);
        DB::table('types')->insert([
            'brand_id'=>'2',
            'name' => 'FZS Fi'
        ]);

        /*Car Models*/
        DB::table('types')->insert([
            'brand_id'=>'3',
            'name' => 'Hyundai Creta'
        ]);DB::table('types')->insert([
            'brand_id'=>'3',
            'name' => 'Hyundai i20'
        ]);
    }
}
