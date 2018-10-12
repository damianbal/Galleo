@extends('layouts.master')

@section('content')
    <h3>{{ $gallery->title }}</h3> 

    <section>
        <div class="text-muted">
            Token: <code>{{ $gallery->token }}</code>
        </div>
    </section>

    <section>
        <div class="row p-3">
        @foreach($gallery->images as $img)
            <div class="col-sm-3 mt-3">
                           <div>{{ $img->title }}</div>
            <div><img class="img-fluid rounded shadow-sm" src="{{ Storage::url($img->thumb_url) }}"></div>
                          <div class="text-muted small">{{ $img->description }}</div>
            <div><a class="btn btn-sm btn-block btn-outline-dark mt-2" href="{{ Storage::url($img->url) }}"><i class="fas fa-expand-arrows-alt"></i> Full Res</a></div>
  
                <div>
                <form method="POST" action="{{ route('image.delete', $img->id) }}">
                    @method('DELETE')
                    @csrf 
                    <button class="btn btn-sm btn-block btn-outline-danger"><i class="far fa-trash-alt"></i> Remove</button>
                </form>
                </div>
            </div>
        @endforeach
        </div>
    </section>

    <section>
        <header><h4>Add image</h4></header>
        
        @include('partials.add_image_to_gallery', ['galleryId' => $gallery->id])
    </section>

    <section class="text-sm-right">
            <form method="POST" action="{{ route('gallery.delete', $gallery->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete Gallery</button> 
            </form>
    </section>
@endsection