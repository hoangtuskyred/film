<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    public function films()
    {
        return $this->belongsToMany('App\Film', 'film_category');
    }

    use SoftDeletes;
}
