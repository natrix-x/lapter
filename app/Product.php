<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function pack() {
        return $this->belongsTo(Pack::class);
    }

}
