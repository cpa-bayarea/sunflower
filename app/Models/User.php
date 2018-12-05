<?php

namespace App\Models;

class User extends \App\Models\Base\User
{
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'PERFIL',
		'STATUS',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];
}
