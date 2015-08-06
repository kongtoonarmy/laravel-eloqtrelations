<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'articles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'titile', 'body'];

	/*public function getPosterUsername()
	{
		return User::where('id', $this->user_id)->first()->name;
	}

	From above comment you can use this code instead
	*/
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function comments()
	{
		return $this->morphMany('App\Models\Comment', 'commentable');
	}
}
