<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [

        'comment_id',
        'rating',
        'user_id',



    ];
}
