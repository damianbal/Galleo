<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\StoreImageRequest;
use App\Services\GalleryService;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageService;

/**
 * Controller responsible for string images in Gallery
 */
class GalleryImagesController extends Controller
{
    /**
     * @var GalleryService
     */
    protected $galleryService = null;

    /**
     * @var ImageService
     */
    protected $imageService = null;

    public function __construct(GalleryService $galleryService,
                                ImageService $imageService)
    {
        $this->galleryService = $galleryService;
        $this->imageService = $imageService;
    }

    public function store(StoreImageRequest $request, Gallery $gallery)
    {
        if (!Auth::user()->can('manage', $gallery)) {
            return $this->redirectToDashboard([], ['You can not upload image to that gallery!']);
        }


        // store file
        $file = $request->file('image');
        $path = $file->store('public/images');

        // generate thumbnail 
        $thumbPath = $this->imageService->generateThumb($file);

        // add image to gallery
        $this->galleryService->addImageToGallery($gallery,
            $path,
            $request->get('title') ?? 'Image',
            $request->get('desc') ?? 'Description', 
            $thumbPath);

        return redirect()->route('gallery.show', $gallery->id);
    }
}
