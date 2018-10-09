@extends('layouts.master')

@section('content')
    Hello in dashboard {{ Auth::user()->name }}

    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-sm btn-warning">Sign out</button>
    </form>
@endsection