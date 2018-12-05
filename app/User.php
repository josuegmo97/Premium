<?php

namespace premium;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* public static function Roles()
	{
		return DB::table('roles')
			->join('genres', 'genres.id', '=', 'roles.genre_id')
			->select('roles.*', 'genres.genre')
			->get();
	} */
}
