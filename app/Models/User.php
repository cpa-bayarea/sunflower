<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 02 Nov 2018 07:10:26 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use \Illuminate\Database\Eloquent\SoftDeletes;

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
 * @package App\Models
 */
class User extends Eloquent{
    use SoftDeletes;

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
        'deleted_at',
        'password',
        'remember_token'
    ];
}
