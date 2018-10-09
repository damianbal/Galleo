@extends('layouts.master')

@section('content')
<h3>Sign Up</h3>
<div class="card mt-1">
    <div class="card-body text-muted">

    <form action="/register" method="POST">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control form-control-sm" placeholder="Your email" required>
        </div>

         <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control form-control-sm" placeholder="Your name" minlength="4" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control form-control-sm" placeholder="Your password" minlength="6" required>
        </div>

        <div class="row">
            <div class="col-sm-6 small">
                Do you have an account? <a href="/sign-in">Sign In</a> now!
            </div>
            <div class="col-sm-6 text-sm-right">
                <button class="btn btn-dark btn-sm"><i class="fas fa-sign-up-alt"></i> Sign Up</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection