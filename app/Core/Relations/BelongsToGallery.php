<?php

namespace App\Core\Relations;

use App\Gallery;

/**
 * Use that trait in any models that have user/creator
 */
trait BelongsToGallery
{
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
