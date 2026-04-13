<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Kita tidak menggunakan 'casts' => ['email' => 'encrypted']
    // Agar Admin bisa melihat raw encrypted string-nya nanti.
    protected $casts = [
        'password' => 'hashed',
    ];
}