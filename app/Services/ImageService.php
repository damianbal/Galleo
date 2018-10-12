<?php

namespace App\Services;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Generate thumbnail for file image
     *
     * @param string $file
     * @return string 
     */
    public function generateThumb($file)
    {
        $image = Image::make($file);
        $image->resize(320, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $filePath = $file->hashName('public/thumbs');
        Storage::put($filePath, (string)$image->encode());
        return $filePath;
    }
}
