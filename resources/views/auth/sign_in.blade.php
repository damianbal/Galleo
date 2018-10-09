@extends('layouts.master')

@section('content')
<h3>Sign In</h3>
<div class="card mt-1">
    <div class="card-body text-muted">

    <form action="/login" method="POST">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control form-control-sm" placeholder="Your email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control form-control-sm" placeholder="Your password" minlength="6" required>
        </div>

        <div class="row">
            <div class="col-sm-6 small">
                Don't have an account? <a href="/sign-up">Sign Up</a> now!
            </div>
            <div class="col-sm-6 text-sm-right">
                <button class="btn btn-dark btn-sm"><i class="fas fa-sign-in-alt"></i> Sign In</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection