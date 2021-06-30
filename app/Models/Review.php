<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;
    
    protected $table = 'cairo_mediameter_reviews';
    
    public function responses(): HasMany
    {
        return $this->hasMany(Response::class);
    }
}
