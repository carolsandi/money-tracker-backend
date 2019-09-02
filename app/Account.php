<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'exchange_rate_id', 'initial_amount', 'balance'
    ];

    protected $with = ['exchangeRate'];

    public function transactions()
    {
        $this->hasMany('App\Transaction');
    }

    public function exchangeRate()
    {
        $this->belongsTo('App\ExchangeRate');
    }
}
