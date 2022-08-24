<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $rut
 * @property $name
 * @property $last_name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $phone_number
 * @property $remember_token
 * @property $razon_social
 * @property $complementary_data
 * @property $profile_photo_path
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rut','name','last_name','email','phone_number','razon_social','complementary_data','profile_photo_path'];



}
