<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function films()
    {
        return $this->belongsToMany('App\Film', 'film_category');
    }
}
