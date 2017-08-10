<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KhanTableSeeder::class);
        $this->call(SangkatsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(HoursTableSeeder::class);
    }
}
