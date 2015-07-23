<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comment;
use App\Models\Article;
use App\Models\User;

use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
		Comment::truncate();
		$faker = Faker::create();

		$commentableType = ['Article', 'User'];
		
		for ($i=1; $i<=25; $i++) {

			$numberBetween = $faker->numberBetween(0, 1);
			if($numberBetween == 0) {
				$articleRandom = Article::all()->random(1);
				$commentableId = $articleRandom->id;	
			}
			else {
				$userRandom = User::all()->random(1);
				$commentableId = $userRandom->id;
			}	

			$user = User::all()->random(1);
			
			Comment::create(['body' => $faker->sentence,
				'user_id' => $user->id,
				'commentable_id' => $commentableId,
				'commentable_type' => $commentableType[$numberBetween]]);	
		}
		
	}

}
