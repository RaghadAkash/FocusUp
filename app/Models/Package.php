<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function consumptionPackages()
    {
        return $this->hasMany(ConsumptionPackage::class);
    }
}
