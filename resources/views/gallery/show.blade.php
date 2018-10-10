@extends('layouts.master')

@section('content')
    <h3>{{ $gallery->title }}</h3> 

    <section>
        <main class="text-muted">
            Token: <code>{{ $gallery->token }}</code>
        </main>
    </section>

    <section>
        <main class="row p-3">
        @foreach($gallery->images as $img)
            <div class="col-sm-3 mt-3">
                           <div>{{ $img->title }}</div>
            <div><img class="img-fluid rounded shadow-sm" src="{{ Storage::url($img->url) }}"></div>
     
                <div class="text-muted small">{{ $img->description }}</div>
                <div>
                <form method="POST" action="{{ route('image.delete', $img->id) }}">
                    @method('DELETE')
                    @csrf 
                    <button class="btn btn-sm btn-danger">Remove</button>
                </form>
                </div>
            </div>
        @endforeach
        </main>
    </section>

    <section class="text-sm-right">
        <main>
            <form method="POST" action="{{ route('gallery.delete', $gallery->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete Gallery</button> 
            </form>
        </main>
    </section>
@endsection