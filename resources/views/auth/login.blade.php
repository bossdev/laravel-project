@extends('app')

@section('css')
    <style>
        body{
            background-color: #eee;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid" id="loginPage">
        <div id="wrapBoxLogin">
            <h1 class="text-center mb-4">
                <img src="{{ asset('images/palm.png') }}" width="40">
                <b class="align-middle">Project N</b>
            </h1>
            <h4 class="text-center mb-3">Log in to continue</h4>
            <form id="formLogin" method="post" action="{{ url('login') }}">
                @csrf
                @if ($errors->has('email'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="text" class="form-control mb-2" name="email" placeholder="Username" />
                <input type="password" class="form-control mb-2" name="password" placeholder="Password" />
                <button type="submit" class="btn btn-dark btn-block">Login</button>
            </form>
        </div>
    </div>
@endsection