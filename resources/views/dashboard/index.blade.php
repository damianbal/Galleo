@extends('layouts.master')

@section('content')
    <section id="dashboardTools" class="row">
        <div class="col-sm-12 text-sm-right">
    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-sm btn-warning">Sign out ({{ Auth::user()->name }})</button>
    </form>
        </div>
    </section>

    <div class="row">
        <div class="col-sm-3">
            bla
        </div>

        <div class="col-sm-9">
            @yield('dashboard_content', 'xd')
        </div>
    </div>

   

    


@endsection