<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Http\Resources\GalleryResource;
use App\User;

class GalleryController extends Controller
{
    /**
     * Returns all galleries of user
     *
     * @param User $user
     * @return Response
     */
    public function index(User $user)
    {
        $galleries = [];

        foreach($user->galleries as $gallery)
        {
            $galleries[] = ['id' => $gallery->id, 
                          'title' => $gallery->title];
        }

        return ['data' => $galleries];
    }

    /**
     * Returns gallery meta data and all the images in gallery
     *
     * @param Gallery $gallery
     * @param Request $request
     * @return Response
     */
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
