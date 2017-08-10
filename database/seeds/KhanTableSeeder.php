<?php

use Illuminate\Database\Seeder;
use App\Khan;

class KhanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $khans = [
        	'Chamkar Mon', 
        	'Doun Penh', 
        	'Prempir Meakkara', 
        	'Toul Kouk', 
        	'Dangkao', 
        	'Mean Chey', 
        	'Ruessei Kaev', 
        	'Sen Sok', 
        	'Pou Senchey',
        	'Chrouy Changvar',
        	'Preak Pnov',
        	'Chbar Ampov',
        ];

        foreach ($khans as $khan){
        	Khan::create(['name' => $khan]);
        }
    }
}
