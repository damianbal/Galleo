@if (Session::has('messages'))
    <div class="alert alert-success">
        <ul>
            @foreach (Session::get('messages') as $msg)
                <li>{{ $msg }}</li>
            @endforeach
        </ul>
    </div>
@endif