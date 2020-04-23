<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name'];

    public function plates()
    {
        return $this->belongsToMany(Plate::class);
    }
}
