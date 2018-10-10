@extends('layouts.master')

@section('content')
<section id="howtos">
    <article>
        <header>
            <h3>Access gallery</h3> 
        </header>
        <main class="p-2">
            You can access your gallery by sending get request to <code>/api/galleries/GALLERY_ID</code>
            but you need to remember about passing token which you can get from gallery page.

            <br> <br> 
            Example: <code>/api/galleries/321?token=XXX</code>
        </main>
    </article>
    
        <article>
        <header>
            <h3>Access user galleries</h3> 
        </header>
        <main class="p-2">
            You can access user galleries by sending get request to <code>/api/user/ID/galleries</code> 
        </main>
    </article>
    
</section>
@endsection