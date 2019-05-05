<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Type extends Model
{
    protected $guarded = [];

    public function animal()
    {
        return $this->HasMany(Animal::class, 'types_id');
    }
}
