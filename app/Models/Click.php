<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Click extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
