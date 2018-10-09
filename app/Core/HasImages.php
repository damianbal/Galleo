<?php 

namespace App\Core;

use App\GalleryImage;

trait HasImages
{
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }
}