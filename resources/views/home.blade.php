@extends('app')

@section('menubar')
    @include('layouts.header_menu')
@endsection

@section('content')
    <div class="col-md-12 homePage">
        <h1>Home Page Dog</h1>
        <p class="currentTimeJa"></p>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection