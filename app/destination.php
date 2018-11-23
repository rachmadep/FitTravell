<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tour;

class destination extends Model
{
    public function tour()
    {
        return $this->hasMany(tour::class, 'idDestination', 'id');
    }
}
