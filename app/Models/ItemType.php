<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ItemType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function item(): HasOne
    {
        return $this->hasOne(ServiceItem::class);
    }
}
