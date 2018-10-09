<?php

namespace App\Core;

use App\GalleryImage;
use App\User;

/**
 * Use that trait in any models that have user/creator
 */
trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
