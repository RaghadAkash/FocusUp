<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumptionPackage extends Model
{
    public function pakage()
    {
        return $this->belongsTo(Package::class);
    }


    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
