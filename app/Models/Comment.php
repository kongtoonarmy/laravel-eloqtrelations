<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['body', 'user_id', 'commentable_id', 'commentable_type'];

	public $timestamps = false;

	public function commentable()
	{
		return $this->morphTo();
	}
}
