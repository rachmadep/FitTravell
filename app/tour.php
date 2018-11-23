<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tourcategory;
use App\tourgallery;
use App\booking;
use App\destination;

class tour extends Model
{
    public function category()
    {
        return $this->hasMany(tourcategory::class, 'idTour', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(tourgallery::class, 'idTour', 'id');
    }

    public function destination()
    {
        return $this->hasMany(destination::class, 'id', 'idDestination');
    }

    public function booking()
    {
        return $this->hasMany(booking::class, 'idTour', 'id');
    }
}
