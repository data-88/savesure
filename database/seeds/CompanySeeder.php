<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name'=>'Prudential Insurance',
            'location' => 'Kamaladi Complex, Kathmandu',
            'phone'=>'+977-01-4212940',
            'image' => 'prudential.png'
        ]);
        DB::table('companies')->insert([
            'name'=>'Himalayan General Insurance',
            'location' => 'HGI House, BabarMahal, Kathmandu',
            'phone'=>'+977 01-4231788',
            'image' => 'hgi.png'
        ]);
        DB::table('companies')->insert([
            'name'=>'United Insurance',
            'location' => 'Trade Tower, Thapathali, Kathmandu',
            'phone'=>'+977-01-5111111',
            'image' => 'united.png'
        ]);

    }
}
