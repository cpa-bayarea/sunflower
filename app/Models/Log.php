<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Nov 2018 23:25:06 +0000.
 */

namespace App\Models;

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
 * @package App\Models
 */
class Log extends Eloquent
{
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USUARIO' => 'int'
	];

	protected $fillable = [
		'NATUREZA',
		'USUARIO'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'USUARIO');
	}
}
