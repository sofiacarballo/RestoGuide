<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plate extends Model
{
    protected $fillable = ['name','price','restaurant_id'];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->BelongsTo(Restaurant::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
