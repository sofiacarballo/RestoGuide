<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Restaurant extends Model
{
    protected $fillable = ['name','address','phone','user_id'];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function plates()
    {
        return $this->hasMany(Plate::class);
    }
}
