<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\GalleryService;
use App\User;
use App\Gallery;

class GalleryServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Undocumented variable
     *
     * @var GalleryService
     */
    protected $galleryService = null;
    protected $user = null;

    public function setUp()
    {
        parent::setUp();

        // create service
        $this->galleryService = new GalleryService;


        $u = User::create([
            'name' => 'Tester',
            'password' => 'abc',
            'email' => 'tester@tester.com',
        ]);

        $this->user = User::find($u)->first();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Check if gallery can be created
     *
     * @return void
     */
    public function testCreatesGallery()
    {

        $galleryId = $this->galleryService->createGallery('My gallery', $this->user);

        $gallery = Gallery::all()->first();

        $this->assertNotNull($gallery);

        $this->assertEquals('My gallery', $gallery->title);
    }

    /**
     * Check if image can be added to gallery
     *
     * @return void
     */
    public function testAddImageToGallery()
    {
        $gallery = $this->galleryService->createGallery('My gallery', $this->user);

        $this->galleryService->addImageToGallery($gallery, 'some/url/to/image.png');

        $this->assertEquals(1, $gallery->images->count());
    }
}
