<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = "admin";

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phone',
        'image',
        'address',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}