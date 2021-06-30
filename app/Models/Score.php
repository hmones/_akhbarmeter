<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
    use HasFactory;
    
    protected $table = 'cairo_mediameter_pscores';
    
    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }
}
