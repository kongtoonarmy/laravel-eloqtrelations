<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Address;
use App\Models\User;

use Faker\Factory as Faker;

class AddressTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		Address::truncate();
		$faker = Faker::create();

		$users = User::all();
		foreach($users as $user) {
			$address = Address::create([
				'user_id'  => $user->id,
                'country'  => $faker->country()
            ]);
		}
	}

}