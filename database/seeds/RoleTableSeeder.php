<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Role;

use Faker\Factory as Faker;

class RoleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		Role::truncate();
		$rolesName = ['Administrator', 'Moderator', 'Editor'];

		foreach($rolesName as $name) {
			$role = Role::create([
                'name'  => $name
            ]);
		}
	}

}