<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Role::create([
			"name" 			=> "administrator",
			"description" 	=> "can control everything in the system"
		]);

		Role::create([
			"name" 			=> "normal",
			"description" 	=> "can search, view, rate, and comment"
		]);        
    }
}
