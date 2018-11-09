<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Nov 2018 22:11:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Postagen
 * 
 * @property int $ID
 * @property string $TEXTO
 * @property int $USUARIO
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Postagens extends Eloquent
{
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USUARIO' => 'int'
	];

	protected $fillable = [
		'TEXTO',
		'USUARIO'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'USUARIO');
	}
}
