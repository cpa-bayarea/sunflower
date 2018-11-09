<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 06 Nov 2018 23:25:06 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $PERFIL
 * @property string $STATUS
 * @property string $CEP
 * @property string $ENDERECO
 * @property string $CIDADE
 * @property string $UF
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $logs
 * @property \Illuminate\Database\Eloquent\Collection $blogs
 * @property \Illuminate\Database\Eloquent\Collection $postagens
 *
 * @package App\Models
 */
class User extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'PERFIL',
		'STATUS',
		'CEP',
		'ENDERECO',
		'CIDADE',
		'UF',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function logs()
	{
		return $this->hasMany(\App\Models\Log::class, 'USUARIO');
	}

	public function blogs()
	{
		return $this->belongsToMany(\App\Models\Blog::class, 'users_blog', 'ID_USER', 'ID_BLOG');
	}

	public function postagens()
	{
		return $this->belongsToMany(\App\Models\Postagen::class, 'users_postagens', 'ID_USER', 'ID_POSTAGENS');
	}
}
