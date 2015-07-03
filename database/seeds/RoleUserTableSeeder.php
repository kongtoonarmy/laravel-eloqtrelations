<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\RoleUser;
use App\Models\Role;
use App\Models\User;

use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		RoleUser::truncate();
		
		$users = User::all();
		$roleNumRows = Role::all()->count();

		foreach($users as $user) {

			$roleNumRand = rand(1, $roleNumRows);

			$roles = Role::orderByRaw("RAND()")->limit($roleNumRand)->get();

			foreach($roles as $role) {
				$roleUser = RoleUser::create([
					'user_id'  => $user->id,
	                'role_id'  => $role->id
	            ]);
			}
		}

	}

}