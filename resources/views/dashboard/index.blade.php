@extends('layouts.master')

@section('content')

    <section id="galleries" class="mb-3">
        <article>
            <header><h3>Galleries</h3></header> 
            <div class="bg-white border rounded p-3">
                @if(count($galleries) < 1) 
                <div class="text-muted">You do not have any galleries!</div>
                @endif

                @foreach($galleries as $gallery)
                <div class="row">
                    <div class="col-sm-8">
                        {{ $gallery->title }}
                    </div>
                    <div class="col-sm-4">
                    <a class="btn btn-primary btn-sm" href="{{ route('gallery.show', [$gallery->id]) }}">Show</a>
                    </div>
                </div>
                @endforeach
            </div>
        </article>
    </section>

        <section id="createGallery">
        <article>
            <header><h3>Create gallery</h3></header> 
            <main>
                @include('partials.create_gallery')
            </main>
        </article>
    </section>

@endsection