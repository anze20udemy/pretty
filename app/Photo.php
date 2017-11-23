<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file', 'category_id', 'thumb'];

    protected $uploads = '/photos/';

    public function getFileAttribute($photo) { // FILE je zato, ker je v Database v Photo tabeli ime datoteke kot FILE

        return $this->uploads . $photo;
    }
    public function category(){

        return $this->belongsTo('App\Category');
    }
    public function service(){

        return $this->belongsTo('App\Service');
    }
}
