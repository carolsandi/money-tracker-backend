<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'full_name', 'email', 'application_id', 'token', 'country', 'phone'
    ];

    protected $hidden = [
        'application_id', 'token'
    ];
}
