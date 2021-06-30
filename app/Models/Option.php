<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    use HasFactory;

    protected $table = 'cairo_mediameter_options';

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
    
    public function responses(): HasMany
    {
        return $this->hasMany(Response::class);
    }
}
