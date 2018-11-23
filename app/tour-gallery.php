<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tour;

class tourgallery extends Model
{
    public function tour()
    {
        return $this->hasMany(tour::class, 'id', 'idTour');
    }
}
