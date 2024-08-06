<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceBlock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ServiceBlockType::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(ServiceItem::class);
    }
}
