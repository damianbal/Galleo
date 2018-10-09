<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Gallery;
use Tests\TestData;

class ApiTest extends TestCase
{
    use TestData, RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        //$this->createTestData();
    }

    public function testIfUserCanAccessGalleryWithoutTokenTest()
    {
        $this->createTestData();

        $response = $this->get('/api/gallery/1');

        //$response->assertJson(['error' => false]);
        //$response->assertStatus(200);
    }
}
