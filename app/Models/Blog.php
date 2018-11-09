<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Nov 2018 23:25:06 +0000.
 */

namespace App\Models;

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
 * @package App\Models
 */
class Blog extends Eloquent
{
	protected $table = 'blog';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $dates = [
		'DATA'
	];

	protected $fillable = [
		'TEXTO',
		'DATA',
		'TITULO'
	];

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'users_blog', 'ID_BLOG', 'ID_USER');
	}
}
