<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    use HasFactory;

    public static $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    protected $guarded = ['disk_name'];

    protected $hidden = ['attachment_type', 'attachment_id', 'is_public'];

    public function attachment(): MorphTo
    {
        return $this->morphTo();
    }
}
