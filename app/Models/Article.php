<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $table = 'cairo_mediameter_articles';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(ArticleCategory::class, 'cairo_mediameter_art_cat', 'article_id', 'category_id');
    }

    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(Label::class, 'cairo_mediameter_art_label');
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
