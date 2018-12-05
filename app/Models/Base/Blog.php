<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 23 Nov 2018 21:14:34 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Blog
 * 
 * @property int $ID
 * @property string $TEXTO
 * @property \Carbon\Carbon $DATA
 * @property string $TITULO
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models\Base
 */
class Blog extends Eloquent
{
	protected $table = 'blog';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $dates = [
		'DATA'
	];

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'users_blog', 'ID_BLOG', 'ID_USER');
	}
}
