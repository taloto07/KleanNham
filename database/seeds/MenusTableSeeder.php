<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(['name' => 'entree']);
        Menu::create(['name' => 'dessert']);
        Menu::create(['name' => 'drink']);
        Menu::create(['name' => 'appetizer']);
    }
}
