<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'amount', 'type', 'account_id', 'category_id', 'description'
    ];

    protected $with = ['account', 'category'];

    public function account()
    {
        $this->belongsTo('App\Account');
    }

    public function category()
    {
        $this->belongsTo('App\Category');
    }
}
