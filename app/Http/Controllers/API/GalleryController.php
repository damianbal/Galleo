<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Http\Resources\GalleryResource;

class GalleryController extends Controller
{
    public function show(Gallery $gallery, Request $request)
    {
        if(!$request->has('token')) {
            return ['error' => true, 'message' => 'You need to pass the token!'];
        }

        if($request->get('token') != $gallery->token) {
            return ['error' => true, 'message' => 'Token is not valid!'];
        }

        return new GalleryResource($gallery);
    }
}
