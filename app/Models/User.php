<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function articles()
	{
		return $this->hasMany('App\Models\Article');
	}

	public function address()
	{
		return $this->hasOne('App\Models\Address');
	}

	public function roles()
	{
		return $this->belongsToMany('App\Models\Role');
	}

	public function country()
	{
		return $this->belongsTo('App\Models\Country');
	}

	public function comments()
	{
		return $this->morphMany('App\Models\Comment', 'commentable');
	}
}
