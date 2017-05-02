<?php

use Illuminate\Database\Seeder;

use App\Hour;

class HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hour::create(['day' => 'monday']);
        Hour::create(['day' => 'tuesday']);
        Hour::create(['day' => 'wenesday']);
        Hour::create(['day' => 'thursday']);
        Hour::create(['day' => 'friday']);
        Hour::create(['day' => 'saturday']);
        Hour::create(['day' => 'sunday']);
    }
}
