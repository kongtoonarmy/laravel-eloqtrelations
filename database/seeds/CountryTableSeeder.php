<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;
use App\Models\User;

use Faker\Factory as Faker;

class CountryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		Country::truncate();
		$faker = Faker::create();

		// Add country
		for($i=1; $i<=10; $i++) {
			$country = Country::create([
            	'name'  => $faker->country()
            ]);
		}

		// Update 'country_id' to articles_table 
		$users = User::all();
		foreach($users as $user) {
			$country = Country::all()->random(1);
			$userFind = User::find($user->id);
			$userFind->country_id = $country->id; 
			$userFind->save();
		}
	}

}
