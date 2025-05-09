<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;   // ‼️ tambahkan

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;   // ‼️ tambahkan HasApiTokens

    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'email_user',
        'username_user',
        'password_user',
        'role_user',
    ];

    protected $hidden = [
        'password_user',
        'remember_token',
    ];

    // Password mutator
    public function setPasswordUserAttribute($value)
    {
        $this->attributes['password_user'] = bcrypt($value);
    }

    // Get password for auth
    public function getAuthPassword()
    {
        return $this->password_user;
    }

    /** @var list<string> */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /** @var list<string> */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /** @return array<string,string> */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password'          => 'hashed',
//         ];
//     }
}
