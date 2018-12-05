<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 23 Nov 2018 21:14:34 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Log
 * 
 * @property int $ID
 * @property string $NATUREZA
 * @property int $USUARIO
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models\Base
 */
class Log extends Eloquent
{
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USUARIO' => 'int'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'USUARIO');
	}
}
