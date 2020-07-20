@extends('layouts.app')

@section('content')

<div class="page-header" style="background-image: url({{asset('img/pens.jpg')}});">
    <div class="filter"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                <div class="card card-register">
                    <h3 class="card-title">Welcome</h3>
                    <form class="register-form" method="POST"  action="{{ route('login') }}">
                        @csrf

                        <label>Email</label>
                        <input id="email" type="email" class="form-control no-border" name="email"  required autocomplete="email" autofocus>

                        <label>Password</label>
                        <input id="password" type="password" class="form-control no-border" name="password" required autocomplete="current-password">

                        <button type="submit" class="btn btn-danger btn-block btn-round">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="demo-footer text-center">
            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Rizky Putra </h6>
        </div>
    </div>
</div>







@endsection
