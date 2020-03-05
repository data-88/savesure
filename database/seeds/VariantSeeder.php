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
            'name' => 'STD 150CC',
            'vehicle_cc' => '150'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'1',
            'name' => 'STD 220CC',
            'vehicle_cc' => '220'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'2',
            'name' => 'STD 150CC',
            'vehicle_cc' => '150'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'2',
            'name' => 'STD 180CC',
            'vehicle_cc' => '180'
        ]);

        DB::table('variants')->insert([
            'type_id'=>'3',
            'name' => 'STD 150CC',
            'vehicle_cc' => '150'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'4',
            'name' => 'STD 150CC',
            'vehicle_cc' => '150'
        ]);

        DB::table('variants')->insert([
            'type_id'=>'5',
            'name' => 'VTVT L 1591CC',
            'vehicle_cc' => '1591'
        ]);
        DB::table('variants')->insert([
            'type_id'=>'6',
            'name' => 'Sportz Option 1197CC',
            'vehicle_cc' => '1197'
        ]);
    }
}
