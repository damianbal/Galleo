<?php

namespace App\Core\Relations;

use App\Gallery;

trait HasGalleries
{
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
