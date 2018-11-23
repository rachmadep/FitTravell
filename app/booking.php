<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\tour;

class booking extends Model
{
    public function user()
    {
        return $this->hasMany(User::class, 'id', 'idUser');
    }
    public function tour()
    {
        return $this->hasMany(tour::class, 'id', 'idTour');
    }
}
