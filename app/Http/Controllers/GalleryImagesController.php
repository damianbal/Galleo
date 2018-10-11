<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\StoreImageRequest;
use App\Services\GalleryService;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * Controller responsible for string images in Gallery
 */
class GalleryImagesController extends Controller
{
    /**
     * @var GalleryService
     */
    protected $galleryService = null;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function store(StoreImageRequest $request, Gallery $gallery)
    {
        if (!Auth::user()->can('manage', $gallery)) {
            return $this->redirectToDashboard([], ['You can not upload image to that gallery!']);
        }

        // store file
        $file = $request->file('image');
        $path = $file->store('public/images');

        // generate thumbnail and store it
        $image = Image::make($file);
        $image->resize(320, 240);
        $filePath = $file->hashName('public/thumbs');
        Storage::put($filePath, (string) $image->encode());

        // add image to gallery
        $this->galleryService->addImageToGallery($gallery,
            $path,
            $request->get('title') ?? 'Image',
            $request->get('desc') ?? 'Description', 
            $filePath);

        return redirect()->route('gallery.show', $gallery->id);
    }
}
