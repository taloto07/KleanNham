<?php

use Illuminate\Database\Seeder;
use App\Sangkat;
use Carbon\Carbon;

class SangkatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = Carbon::now()->toDateTimeString();
    	$sangkats = [
    		['name' => 'Russei Keo', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Toul Sang Ke', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kilometre 6', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chrang Chamres 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chrang Chamres 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Svay Pak', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng kok 1', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng kok 2', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar depo 1', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar depo 2', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar depo 3', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Tuk Laak 1', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Tuk Laak 2', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Tuk Laak 3', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Ddoeumkor', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Salang', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Sraas Chak', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Wat Phnom', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Chas', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Kandal 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Kandal 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chey Chumneas', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chak Tomuk', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Thmei 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Thmei 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Thmei 3', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Raing', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chom Chao', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kakap', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kraing Thnoung', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kok Roka', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phleung Chheh Roteh', 	'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Samraong Kraom', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Thum', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kamboul', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kantaok', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Ovlaok', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Snaor', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phnom Penh Thmei', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Teuk Thlar', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Khmounh', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Tonle Basak', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Kengkang 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Kengkang 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Kengkang 3', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Boeng Trabek', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Tumnup Tuk', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phsar Doeum Thkov', 	'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Toul Svay Prey 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Toul Svay Prey 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Toul Tum Poung 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Toul Tum Poung 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Olympic', 				'created_at' => $now, 'updated_at' => $now],
	 		['name' => 'Boeng Tumpun', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Stung Meanchey', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chak Angre Krom', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chak Angre Leu', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Dang Kor', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Trapeang Krasaing', 	'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Phleung Chhesrotes', 	'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Porng Teuk', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prey Veng', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Samrong', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prey Sar', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kraing Pongro', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prataslang', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Sac Sampeou', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Cheung Ek', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chbar Ampeou 1', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chbar Ampeou 2', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Niroth', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prek Pra', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prek Eng', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Preak Thmey', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Kbal Koh', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Veal Sbov', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Chroy Chang Va', 		'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prek Tasek', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prek Leap', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Prek Phnov', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Ponh Nheapon', 			'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Koh Roka', 				'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Pon Sang', 				'created_at' => $now, 'updated_at' => $now],
    	];

        Sangkat::insert($sangkats);
    }
}
