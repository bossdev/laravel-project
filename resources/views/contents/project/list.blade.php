@extends('app')

@section('menubar')
    @include('layouts.header_menu')
@endsection

@section('content')
    <div class="col-md-12">
        @foreach($projects as $key => $project)
            <div style="border-bottom:1px solid #ccc">
                <p class="mb-1 mt-1">
                    <b>{{ $key+1 }}.) </b>
                    <b>Name :</b> {{ $project->name }} |
                    <b>Amount :</b> {{ $project->amount_worker }} |
                    <b>Status :</b> {{ $project->status }}
                </p>
                
            </div>
        @endforeach
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection