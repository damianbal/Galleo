<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\BelongsToGallery;

class GalleryImage extends Model
{
    use BelongsToGallery;

    protected $fillable = ['url', 'thumb_url', 'title', 'description'];
}
