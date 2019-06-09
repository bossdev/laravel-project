@extends('app')

@section('css')
    <style>
        body{
            background-color: #eee;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div id="wrapBoxRegister">
            <h1 class="text-center mb-4">
                <img src="{{ asset('images/palm.png') }}" width="40">
                <b class="align-middle">Project N</b>
            </h1>
            <h4 class="text-center mb-3">Log in to continue</h4>
            <form id="formRegister" method="post" action="{{ url('register') }}">
                @csrf
                @if ($errors->has('name'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <input type="text" class="form-control mb-2 {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" />

                @if ($errors->has('email'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="text" class="form-control mb-2 {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" />

                @if ($errors->has('password'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <input type="password" class="form-control mb-2 {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Password" />

                @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
                <input type="password" class="form-control mb-2 {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" placeholder="Confirm Password" />
                <button type="submit" class="btn btn-dark btn-block">Register</button>
            </form>
        </div>
    </div>
@endsection
