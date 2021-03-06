<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">

        <title>Galleo</title>
    </head>

    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12">
                    <h3><i class="fas fa-images"></i> Galleo</h3>
                </div>
                <div class="col-sm-12 text-muted">
                    Gallery Platform for Developers
                </div>
            </div>

        </div>
        <div class="container mt-3 bg-light p-3 border rounded shadow-sm">
            @auth
            <section class="row" id="userSection">
                <article class="col-sm-12 text-sm-right">
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn btn-sm btn-warning"><i class="fas fa-sign-out-alt"></i> Sign out ({{ Auth::user()->name }})</button>
                    </form>
                </article>
            </section>

            @endauth
            <section class="row" id="errors">
                <article class="col-sm-12">
                    @include('partials.errors')
                </article>
            </section>
            <section class="row" id="messages">
                <article class="col-sm-12">
                    @include('partials.messages')
                </article>
            </section>
            <section class="row" id="mainContent">
                <div class="col-sm-3">
                    <div class="list-group">
                        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        <a href="{{ route('dashboard.how_to') }}" class="list-group-item list-group-item-action"><i class="fas fa-info"></i> How to</a>
                    </div>
                </div>
                <article class="col-sm-9">
                    @yield('content')
                </article>
            </section>
        </div>

        <footer class="container mt-3 p-1 text-muted small">
            Galleo (&copy;) 2018
        </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </body>

</html>
