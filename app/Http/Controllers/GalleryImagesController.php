<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\StoreImageRequest;
use App\Services\GalleryService;
use Illuminate\Support\Facades\Auth;

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

        $file = $request->file('image');

        $path = $file->store('public/images');

        $this->galleryService->addImageToGallery($gallery,
            $path,
            $request->get('title') ?? 'Image',
            $request->get('desc') ?? 'Description');

        return redirect()->route('gallery.show', $gallery->id);
    }
}
