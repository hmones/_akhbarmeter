<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'cairo_mediameter_publishers';

    public function scores(): HasMany
    {
        return $this->hasMany(Score::class);
    }

    public function logo(): MorphOne
    {
        return $this->morphOne(File::class, 'attachment');
    }
}
