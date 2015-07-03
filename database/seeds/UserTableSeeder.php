<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		User::truncate();
		$faker = Faker::create();

		for($i=1; $i<=10; $i++) {
			$user = User::create([
                'name'     => $faker->unique()->userName,
                'password' => Hash::make($faker->lastName),
                'email'    => $faker->unique()->email
            ]);
		}
	}

}
