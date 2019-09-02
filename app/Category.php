<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'type', 'description', 'icon', 'estimated_budget', 'frequency'
    ];

    public function transactions()
    {
        $this->hasMany('App\Transaction');
    }

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
