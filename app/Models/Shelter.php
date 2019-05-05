<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Shelter extends Model
{
    protected $guarded = [];

    public function animal()
    {
        return $this->hasMany(Animal::class, 'shelters_id');
    }
}
