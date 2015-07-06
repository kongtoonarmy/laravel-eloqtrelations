<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
	
class Country extends Model 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'countries';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	public $timestamps = false;

	public function articles()
	{
		return $this->hasManyThrough('App\Models\Article', 'App\Models\User', 'country_id', 'user_id'); 
	}
}