@extends('master')

@section('title')
WEB3 | Detail
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{ URL::asset('images/project-1.jpg') }}">
        </div>
        <div class="col-sm-6 text-justify">
            <h4>{{ $places->name }}</h4>
            <p>{{ $places->description }} </p>
            <a class="btn btn-primary" href="{{ url('place') }}">Back</a>
        </div>
    </div>
</div>
@endsection