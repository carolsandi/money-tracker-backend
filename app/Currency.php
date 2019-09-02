<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'short_name', 'name', 'symbol'
    ];

    public function exchangeRates()
    {
        $this->hasMany('App\ExchangeRate');
    }
}
