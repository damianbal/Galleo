<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Gallery;
use App\Services\GalleryService;

class GallerySeeder extends Seeder
{
    protected $galleryService = null; 
    
    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gallery = $this->galleryService->createGallery('Demo gallery', User::find(1)->first());
    }
}
