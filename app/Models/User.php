<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'last_name',
        'first_name',
        'phone_number',
        'dateOfBirth',
        'rue',
        'code_postale',
        'country',
        'email',
        'password',
        'description',
        'profile'
    ];

    public function academics()
    {
        return $this->hasMany(Academic::class,'user_id','id');
    }

    public function languages()
    {
        return $this->hasMany(Language::class,'user_id','id');
    }

    public function softwares()
    {
        return $this->hasMany(Software::class,'user_id','id');
    }

    public function hobbys()
    {
        return $this->hasMany(Hobby::class,'user_id','id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
