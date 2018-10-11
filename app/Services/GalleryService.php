<?php 

namespace App\Services;

use App\User;
use App\Gallery;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image as Image;


class GalleryService
{
    /**
     * Create empty gallery
     *
     * @param string $title
     * @param User $user
     * @return int
     */
    public function createGallery(string $title, User $user)
    {
        $gallery = Gallery::create([
            'title' => $title, 
            'token' => md5(Carbon::now()->toDateTimeString()),
            'user_id' => $user->id,
        ]);

        return $gallery;
    }

    /**
     * Add image to gallery
     *
     * @param Gallery $gallery
     * @param string $url
     * @return integer
     */
    public function addImageToGallery(Gallery $gallery, $url = 'images/default.png', $title = 'Image', 
                                        $desc = '')
    {
        // TODO: create thumb and set thumb_url
        

        return $gallery->images()->create([
            'url' => $url,
            'title' => $title,
            'thumb_url' => '...',
            'description' => $desc,
        ]);
    }
}