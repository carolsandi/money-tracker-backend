<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExchangeRate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'currency_id', 'rate', 'type'
    ];

    protected $with = ['currency'];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function currency()
    {
        $this->belongsTo('App\Currency');
    }
}
