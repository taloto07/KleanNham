<?php

use Illuminate\Database\Seeder;
use App\Price;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Price::create(['amount' => '1', 'description' => 'inexpensive']);
		Price::create(['amount' => '2', 'description' => 'moderate']);        
		Price::create(['amount' => '3', 'description' => 'pricey']);
        Price::create(['amount' => '4', 'description' => 'expensive']);
    }
}
