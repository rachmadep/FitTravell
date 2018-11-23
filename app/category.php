<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tourcategory;

class category extends Model
{
    public function tourcategory()
    {
        return $this->belongsToMany(tourcategory::class, 'idCategory', 'id');
    }
}
