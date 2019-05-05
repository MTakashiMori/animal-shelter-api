<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shelter;
use App\Models\Statu;
use App\Models\Type;

class Animal extends Model
{
    protected $guarded = [];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class, 'shelters_id');
    }

    public function status()
    {
        return $this->belongsTo(Statu::class, 'status_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }
}
