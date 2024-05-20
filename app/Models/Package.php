<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function truck_driver(){
        return $this->belongsTo('App\Models\Truck_driver');
    }
}
