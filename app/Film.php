<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    public function episodes()
    {
        return $this->hasMany('App\Episode');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'film_category')->withTimestamps();
    }

    use SoftDeletes;
}
