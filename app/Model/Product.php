<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviiews()
    {
        return $this->hasMany(Review::class);
    }
}
