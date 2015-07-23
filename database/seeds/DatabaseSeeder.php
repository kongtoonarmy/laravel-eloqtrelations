<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
        $this->call('UserTableSeeder');
		$this->call('ArticleTableSeeder');
		$this->call('AddressTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('RoleUserTableSeeder');
		$this->call('CountryTableSeeder');
		$this->call('CommentsTableSeeder');
	}

}
