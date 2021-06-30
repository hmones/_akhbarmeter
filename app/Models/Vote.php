<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'cairo_voting_likes';

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
