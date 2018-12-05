<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 23 Nov 2018 21:14:34 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $PERFIL
 * @property string $STATUS
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $logs
 * @property \Illuminate\Database\Eloquent\Collection $blogs
 * @property \Illuminate\Database\Eloquent\Collection $postagens
 *
 * @package App\Models\Base
 */
class User extends Eloquent
{
	protected $dates = [
		'email_verified_at'
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
		return $this->belongsToMany(\App\Models\Postagem::class, 'users_postagens', 'ID_USER', 'ID_POSTAGENS');
	}
}
