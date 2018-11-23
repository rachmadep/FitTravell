<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
use App\tour;

class tourcategory extends Model
{
    public function category()
    {
        return $this->hasMany(category::class, 'id', 'idCategory');
    }

    public function tour()
    {
        return $this->hasMany(tour::class, 'id', 'idTour');
    }
}
