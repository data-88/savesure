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

        DB::table('brands')->insert([
            'name' => 'Bajaj'
        ]);

        DB::table('brands')->insert([
            'name' => 'Yamaha'
        ]);
    }
}
