<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'rainlab_blog_categories';

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'rainlab_blog_posts_categories', 'category_id', 'post_id');
    }
}
