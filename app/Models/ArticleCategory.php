<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $table = 'cairo_mediameter_categories';

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'cairo_mediameter_art_cat', 'category_id', 'article_id');
    }
}
