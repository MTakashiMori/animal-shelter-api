<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $guarded = [];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }
}
