<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\GalleryService;
use App\Http\Requests\StoreGalleryRequest;

class GalleryController extends Controller
{
    /**
     * 
     *
     * @var GalleryService
     */
    protected $galleryService = null;

    public function __construct(GalleryService $galleryService  )
    {
        $this->galleryService = $galleryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        $gallery = $this->galleryService->createGallery($request->get('title'), Auth::user());

        if($gallery != null) {
            return $this->redirectToDashboard(['Gallery created with id: ' . $gallery->id]);
        }
        else {
            return $this->redirectToDashboard([], ['Could not create gallery!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        if(!Auth::user()->can('show', $gallery)) 
        {
            return redirect()->route('dashboard')->with('message', [
                'You do not have access to that gallery!'
            ]);
        }

        return view('gallery.show', ['gallery' => $gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if(!Auth::user()->can('delete', $gallery))
        {
            //$gallery->delete();
            return $this->redirectToDashboard();
        }

        $gallery->delete();

        return $this->redirectToDashboard(['Gallery has been removed!']);

    }
}
