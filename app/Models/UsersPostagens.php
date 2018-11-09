<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Nov 2018 23:25:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UsersPostagen
 * 
 * @property int $ID_USER
 * @property int $ID_POSTAGENS
 * 
 * @property \App\Models\Postagen $postagen
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UsersPostagens extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'ID_POSTAGENS' => 'int'
	];

	public function postagen()
	{
		return $this->belongsTo(\App\Models\Postagen::class, 'ID_POSTAGENS');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'ID_USER');
	}
}
