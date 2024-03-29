<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(VariantSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(PremiumSeeder::class);
    }
}
