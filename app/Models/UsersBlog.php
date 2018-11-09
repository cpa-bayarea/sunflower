<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Nov 2018 23:25:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UsersBlog
 * 
 * @property int $ID_USER
 * @property int $ID_BLOG
 * 
 * @property \App\Models\Blog $blog
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UsersBlog extends Eloquent
{
	protected $table = 'users_blog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'ID_BLOG' => 'int'
	];

	public function blog()
	{
		return $this->belongsTo(\App\Models\Blog::class, 'ID_BLOG');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'ID_USER');
	}
}
