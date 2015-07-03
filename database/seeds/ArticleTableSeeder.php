<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Article;
use App\Models\User;

use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		Article::truncate();
		$faker = Faker::create();

		$userRand = rand(3,10);
		$users = User::orderByRaw("RAND()")->limit($userRand)->get();
		foreach($users as $user) {
			$rand = rand(1,5);
			for($i=1; $i<=$rand; $i++) {
				$article = Article::create([
					'user_id'  => $user->id,
	                'title'    => $faker->sentence(),
	                'body'     => $faker->text()
	            ]);
			}
		}
	}

}
