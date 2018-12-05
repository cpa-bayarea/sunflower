<?php

namespace App\Models;

class Postagem extends \App\Models\Base\Postagem
{
	protected $fillable = [
		'TEXTO',
		'DATA',
		'SECAO'
	];
}
