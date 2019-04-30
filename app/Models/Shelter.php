<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    protected $guarded = [];

    public function animal()
    {
        return $this->hasMany(Animal::class);
    }
}
