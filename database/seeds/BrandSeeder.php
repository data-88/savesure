<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Brand::class, 5)->create()->each(function($brand){
        //     factory(\App\Type::class, 5)->create([
        //         'brand_id' => $brand->id
        //     ]);
        // });

        /*Bike Brands*/
        DB::table('brands')->insert([
            'category_id' => '1',
            'name' => 'Bajaj'
        ]);

        DB::table('brands')->insert([
            'category_id' => '1',
            'name' => 'Yamaha'
        ]);

        /*Car Brands*/
        DB::table('brands')->insert([
            'category_id' => '2',
            'name' => 'Hyundai'
        ]);

        DB::table('brands')->insert([
            'category_id' => '2',
            'name' => 'Maruti'
        ]);

    }
}
