@extends('app')

@section('menubar')
    @include('layouts.header_menu')
@endsection

@section('content')
    <div id="app-vue" class="col-md-12">
        <p>Form page</p>
        <form-page postformurl="{{ url('postForm') }}" csrf_token="{{ csrf_token() }}"></form-page>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection