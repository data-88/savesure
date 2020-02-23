<?php

use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variants')->insert([
            'type_id'=>'1',
            'name' => 'STD 150CC'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'1',
            'name' => 'STD 220CC'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'2',
            'name' => 'STD 150CC'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'2',
            'name' => 'STD 180CC'
        ]);

        DB::table('variants')->insert([
            'type_id'=>'3',
            'name' => 'STD 150CC'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'4',
            'name' => 'STD 150CC'
        ]);
    }
}
