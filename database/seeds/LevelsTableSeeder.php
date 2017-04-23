<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Level::create(['name' => 'low']);
		Level::create(['name' => 'middle']);        
		Level::create(['name' => 'high']);
    }
}
