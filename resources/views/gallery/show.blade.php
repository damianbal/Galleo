@extends('layouts.master')

@section('content')
    <h3>{{ $gallery->title }}</h3> 

    <section>
        <main class="text-muted">
            Token: <code>{{ $gallery->token }}</code>
        </main>
    </section>

    <section class="text-sm-right">
        <main>
            <form method="POST" action="{{ route('gallery.delete', $gallery->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button> 
            </form>
        </main>
    </section>
@endsection