<?php 

namespace App\Core\Relations;


use App\GalleryImage;

trait HasImages
{
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }
}