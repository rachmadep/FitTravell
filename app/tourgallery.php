<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tour;

class tourgallery extends Model
{
    protected $table = 'tour-galleries';

    public function tour()
    {
        return $this->hasMany(tour::class, 'id', 'idTour');
    }
}
