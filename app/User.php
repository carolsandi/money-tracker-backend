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

    public function exchangeRates()
    {
        $this->hasMany('App\ExchangeRate');
    }

    public function accounts()
    {
        $this->hasManyThrough('App\Account', 'App\ExchangeRate');
    }

    public function categories()
    {
        $this->hasMany('App\Category');
    }

    public function transactions()
    {
        $this->hasManyThrough('App\Transaction', 'App\Category');
    }
}
