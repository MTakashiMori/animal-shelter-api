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

    public function status()
    {
        return $this->belongsTo(Statu::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
