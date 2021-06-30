<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'rainlab_blog_posts';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PostCategory::class, 'rainlab_blog_posts_categories', 'post_id', 'category_id');
    }
}
