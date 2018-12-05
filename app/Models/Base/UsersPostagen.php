<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 23 Nov 2018 21:14:34 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UsersPostagen
 * 
 * @property int $ID_USER
 * @property int $ID_POSTAGENS
 * 
 * @property \App\Models\Postagem $postagen
 * @property \App\Models\User $user
 *
 * @package App\Models\Base
 */
class UsersPostagen extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'ID_POSTAGENS' => 'int'
	];

	public function postagen()
	{
		return $this->belongsTo(\App\Models\Postagem::class, 'ID_POSTAGENS');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'ID_USER');
	}
}
