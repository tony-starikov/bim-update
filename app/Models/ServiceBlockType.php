<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ServiceBlockType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function block(): HasOne
    {
        return $this->hasOne(ServiceBlock::class);
    }
}
