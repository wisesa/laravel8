@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form>
                <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">
                </div>
                <div class="form-floating mt-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <small class="d-block mt-3 text-center">Not registered? <a href="/register">Register Now!</a></small>
            </form>
        </main>
    </div>
</div>

@endsection